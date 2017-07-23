<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPassword;
use App\Models\Char;
use App\Models\Login;
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
        $chars = Char::where('account_id', $auth->user()->account_id)
            ->get();

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
        $account_id = $auth->user()->account_id;

        $char = Char::where('account_id', $account_id)
            ->where('char_id', Input::get('char_id'))
            ->where('online', 0)
            ->firstOrFail();

        $char->last_map = $char->save_map;
        $char->last_x = $char->save_x;
        $char->last_y = $char->save_y;
        $char->hair = 1;
        $char->hair_color = 0;
        $char->clothes_color = 0;
        $char->body = 0;
        $char->shield = 0;
        $char->head_top = 0;
        $char->head_mid = 0;
        $char->head_bottom = 0;
        $char->robe = 0;
        $char->save();

        return redirect()->back()->with('status', 'La position de '.$char->name.' a bien été reset');
    }
}
