<?php

namespace App\Http\Controllers;

use App\Lib\Starpass\Starpass;
use App\Models\Login;
use App\Repositories\AccRegNumRepository;
use App\Repositories\CharRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PaymentController
{
    protected $accRegNumRepository;
    protected $charRepository;

    public function __construct(AccRegNumRepository $accRegNumRepository, CharRepository $charRepository)
    {
        $this->accRegNumRepository = $accRegNumRepository;
        $this->charRepository = $charRepository;
    }

    /**
     * Show form for buy cashpoint with starpass
     *
     * @param Guard $auth
     * @return \Illuminate\Http\Response
     */
    public function show(Guard $auth)
    {
        $isOnline = $this->charRepository->isOnline($auth->user()->account_id);
        $starpass_idd = Config::get('ragnarok.starpass_idd');

        return view('payment.show', compact('starpass_idd', 'isOnline'));
    }

    /**
     * Traitment of form for checkout starpass code
     *
     * @param Guard $auth
     * @param Starpass $starpass
     * @return \Illuminate\Http\Response
     */
    public function checkStarpass(Guard $auth, Starpass $starpass)
    {
        if ($this->charRepository->isOnline($auth->user()->account_id))
        {
            return redirect()->route('user.payment.show');
        }

        if($starpass->codeIsInvalide(Config::get('ragnarok.starpass_idp'), Config::get('ragnarok.starpass_idd'), Input::all()))
        {
            return redirect()->route('user.payment.show')
                ->with('error', 'Le code est invalide');
        }

        $this->accRegNumRepository->incrementOrCreate([
            'account_id' => $auth->user()->account_id,
            'key' => '#CASHPOINTS',
        ], [
            'value' => DB::raw('value+'. Config::get('ragnarok.server_nb_add_cashpoint')),
        ]);

        return redirect()->route('user.payment.show')
            ->with('message', "Le code a bien été ajouté.");
    }
}