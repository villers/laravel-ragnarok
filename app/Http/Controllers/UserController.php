<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPassword;
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

    /**
     * UserController constructor.
     * @param CharRepository $charRepository
     */
    public function __construct(CharRepository $charRepository)
    {
        $this->charRepository = $charRepository;
    }

    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.home');
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
