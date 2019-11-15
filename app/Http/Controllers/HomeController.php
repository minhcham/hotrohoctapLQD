<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!Session::has('taikhoan')) {
            return view('auth.login');
        }

        return view('layout.home');
    }

    //get thông tin
    public function getContact()
    {
        $taikhoan = Session::get('taikhoan');

        return view('setting.contact', ['taikhoan' => $taikhoan]);
    }
}
