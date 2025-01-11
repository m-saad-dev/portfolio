<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.layouts.main');
})->name('website');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::prefix('admin')->as(('admin.'))->middleware('auth')->group(function(){
    Route::get('/dashboard',  function () {return view('admin.layouts.app');})->name('dashboard');
    Route::resource('/services',  'App\Http\Controllers\ServiceController');
    Route::resource('/portfolios',  'App\Http\Controllers\PortfolioController');

}
);