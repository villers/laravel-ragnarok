<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPassword;
use App\Repositories\AccRegNumRepository;
use App\Repositories\CharRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    protected $charRepository;
    protected $accRegNumRepository;

    /**
     * UserController constructor.
     * @param CharRepository $charRepository
     * @param AccRegNumRepository $accRegNumRepository
     */
    public function __construct(CharRepository $charRepository, AccRegNumRepository $accRegNumRepository)
    {
        $this->charRepository = $charRepository;
        $this->accRegNumRepository = $accRegNumRepository;
    }

    /**
     * Show the user dashboard.
     *
     * @param Guard $guard
     * @return \Illuminate\Http\Response
     */
    public function index(Guard $guard)
    {
        $nb_cashpoint = $this->accRegNumRepository->getCashPoint($guard->user()->account_id);

        return view('user.home', compact('nb_cashpoint'));
    }

    /**
     * password form
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('user.password');
    }

    /**
     * Reset the given user's password.
     *
     * @param StoreUserPassword $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postChangePassword(StoreUserPassword $request)
    {
        if (!Hash::check($request->get('old_user_pass'), $request->user()->user_pass)) {
            return redirect()->back()->withErrors(['old_user_pass' => 'Ancien mot de passe incorrect']);
        }

        $request->user()->password = $request->get('user_pass');
        $request->user()->save();

        return redirect()->back()->with('status', 'Votre mot de passe a bien été changé');
    }

    public function chars(Guard $auth)
    {
        $chars = $this->charRepository->getByAccountId($auth->user()->account_id);

        return view('user.chars', compact('chars'));
    }

    /**
     * Reset the char's position.
     *
     * @param Guard $auth
     * @param \Illuminate\Http\Request|Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postResetChars(Guard $auth, Request $request)
    {
        $char = $this->charRepository->get(Input::get('char_id'), $auth->user()->account_id, 0);
        $this->charRepository->reset($char);

        return redirect()->back()->with('status', 'La position de '.$char->name.' a bien été reset');
    }
}
