<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\kategori;

class FrontController extends Controller //conroler aowkaokwoakw
{
    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('index', compact('produk', 'kategori'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop');
    }

    public function single()
    {
        return view('single');
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
