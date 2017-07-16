<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the page staff.
     *
     * @return \Illuminate\Http\Response
     */
    public function staff()
    {
        return view('staff');
    }
}
