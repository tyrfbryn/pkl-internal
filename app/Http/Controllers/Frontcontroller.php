<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller //conroler aowkaokwoakw
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop');
    }

    public function track()
    {
        return view('track');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function cart()
    {
        return view('cart');
    }

    public function detail()
    {
        return view('detail');
    }

    public function about()
    {
        return view('about');
    }
}
