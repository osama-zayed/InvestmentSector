<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize']
    ],
    function () {

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('test', function () {
            return "hello";
        });
    }
);
