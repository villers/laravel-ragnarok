<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPassword;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
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
}
