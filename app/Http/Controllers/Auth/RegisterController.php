<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'userid' => 'required|string|max:255|unique:login',
            'email' => 'required|string|email|max:255|unique:login',
            'birthdate' => 'required|date',
            'sex' => 'required|in:M,F',
            'password' => 'required|string|min:6|confirmed',
            'captcha' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Login
     */
    protected function create(array $data)
    {
        return Login::create([
            'userid' => $data['userid'],
            'email' => $data['email'],
            'user_pass' => Config::get('ragnarok.server_md5') ? md5($data['password']) : $data['password'],
            'sex' => $data['sex'],
            'birthdate' => $data['birthdate'],
            'last_ip' => Request::ip(),
        ]);
    }
}
