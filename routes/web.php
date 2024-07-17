<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\IsAdmin;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// cek template admin
// Route::get('/tes', function () {
//     return view('layouts.admin');

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('layouts.admin.index');
    });
    // untul Route backend lainnya
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('produk', App\Http\Controllers\ProdukController::class);
    Route::resource('order', App\Http\Controllers\OrderController::class);
});

// // Route Admin(Backend)
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/', function () {
//         return view('admin_index');
//     });
// });

// cek template front
Route::get('/', [FrontController::class, 'index']);

Route::get('contact', function () {
    return view('contact');
});
Route::get('cart', function () {
    return view('cart');
});

Route::get('shop', function () {
    return view('shop');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('single', function () {
    return view('single');
});

Route::get('about', function () {
    return view('about');
});

Route::get('detail', function () {
    return view('detail');
});

