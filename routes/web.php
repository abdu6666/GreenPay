<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/login', function () {
    return view('auth.login');
});

Route::get('/admin/transaction', function () {
    return view('admin.transaction');
});

Route::get('/admin/wallet', function () {
    return view('admin.wallet');
});

Route::get('/admin/ibanking', function () {
    return view('admin.ibanking');
});

Route::get('/admin/invoice', function () {
    return view('admin.invoice');
});

//Route::get('/admin/dashboard', function () {
//    return view('admin.index');
//});
//
//Route::get('/admin/dashboard', function () {
//    return view('admin.index');
//});
//
//Route::get('/admin/dashboard', function () {
//    return view('admin.index');
//});

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

Route::get('/install/step1', function () {
    return view('install.step1');
});
