<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Session;
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('set-locale/{locale}', function ($locale, Illuminate\Http\Request $request) {

    Session::put('locale', $locale);

    app()->setLocale($locale);
    // }
    return redirect()->back();
})->name('setLocale');
