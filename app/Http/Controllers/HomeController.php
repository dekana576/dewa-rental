<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('frontend.homepage', compact('product'));
    }
 
    public function adminHome()
    {
        return view('dashboard');
    }

    public function detail()
    {
        return view('frontend.detail');
    }
    
    public function contact()
    {
        return view('frontend.contact');
    }
    
    public function about()
    {
        return view('frontend.about');
    }
    
    public function history()
    {
        return view('frontend.history');
    }
}
