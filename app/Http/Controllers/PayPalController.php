<?php

namespace App\Http\Controllers;

use App\Repositories\AccRegNumRepository;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    const price = 0.01;

    /**
     * @var ExpressCheckout
     */
    protected $provider;
    protected $accRegNumRepository;

    public function __construct(AccRegNumRepository $accRegNumRepository)
    {
        $this->provider = new ExpressCheckout();
        $this->accRegNumRepository = $accRegNumRepository;
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getPaypal(Request $request)
    {
        $qty = (int) $request->get('qty') ?? 1;
        Session::put('qty', $qty);

        $cart = $this->getCheckoutData();

        try {
            $response = $this->provider->setExpressCheckout($cart);

            return redirect($response['paypal_link']);
        } catch (\Exception $e) {
            session()->put(['code' => 'danger', 'message' => "Error processing PayPal payment!"]);
        }
    }

    /**
     * Process payment on PayPal.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @param Guard $auth
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getPaypalCheckout(Request $request, Guard $auth)
    {
        $token = $request->get('token');
        $PayerID = $request->get('PayerID');

        $cart = $this->getCheckoutData();
        $response = $this->provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $payment_status = $this->provider->doExpressCheckoutPayment($cart, $token, $PayerID);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            $invoice = $this->createInvoice($cart, $status, $auth);

            if ($invoice) {
                Session::flash('paypal_success', 'Order has been paid successfully!');
            } else {
                Session::flash('paypal_error', 'Error processing PayPal payment');
            }

            return redirect('/user/payment');
        }
    }

    /**
     * Parse PayPal IPN.
     *
     * @param \Illuminate\Http\Request $request
     * @throws \Exception
     */
    public function notify(Request $request)
    {
        if (!($this->provider instanceof ExpressCheckout)) {
            $this->provider = new ExpressCheckout();
        }

        $request->merge(['cmd' => '_notify-validate']);
        $post = $request->all();

        $response = (string) $this->provider->verifyIPN($post);

        $logFile = 'ipn_log_'.Carbon::now()->format('Ymd_His').'.txt';
        Storage::disk('local')->put($logFile, $response);
    }

    /**
     * Set cart data for processing payment on PayPal.
     *
     * @return array
     */
    protected function getCheckoutData()
    {
        $data = [];

        $order_id = uniqid();
        $data['items'] = [
            [
                'name'  => 'Cashpoint',
                'price' => PayPalController::price,
                'qty'   => Session::get('qty'),
            ]
        ];
        $data['return_url'] = route('user.payment.paypal.checkout');
        $data['invoice_id'] = $order_id;
        $data['invoice_description'] = "Order #$order_id Invoice for " . Session::get('qty') . " cashpoints";
        $data['cancel_url'] = route('user.payment.show');

        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $data['total'] = $total;

        return $data;
    }

    /**
     * Create invoice.
     *
     * @param array $cart
     * @param $status
     * @param Guard $auth
     * @return bool
     */
    protected function createInvoice($cart, $status, Guard $auth)
    {
        if (!strcasecmp($status, 'Completed') || !strcasecmp($status, 'Processed')) {
            collect($cart['items'])->each(function ($product) use ($auth) {
                $this->accRegNumRepository->incrementOrCreate([
                    'account_id' => $auth->user()->account_id,
                    'key' => '#CASHPOINTS',
                ], [
                    'value' => DB::raw('value+'. $product['qty']),
                ]);
            });

            Session::forget('qty');

            return true;
        }

        return false;
    }
}
