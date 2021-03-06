<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable+wq:wq
     *
     */
    public function index()
    {
        if(Auth::user()->role->name = 'admin'){
            return  redirect()->to('/dashboard');

        }

        return view('home');
    }
}
