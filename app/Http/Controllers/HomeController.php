<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('frontend.homepage');
    }
 
    public function adminHome()
    {
        return view('dashboard');
    }

    public function detail()
    {
        return view('frontend.detail');
    }
    

    
}
