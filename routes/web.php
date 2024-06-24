<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// cek template admin
Route::get('/tes', function () {
    return view('layouts.admin');
});

// // Route Admin(Backend)
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/', function () {
//         return view('admin_index');
//     });
// });


// cek template front
Route::get('tes', function () {
    return view('layouts.front');
});

Route::get('/', function () {
    return view('index');
});
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

Route::get('track', function () {
    return view('track');
});

Route::get('about', function () {
    return view('about');
});

Route::get('detail', function () {
    return view('detail');
});

