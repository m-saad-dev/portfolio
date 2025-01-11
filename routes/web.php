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

Route::prefix('admin')->as(('admin'))->resource('/messages', 'App\Http\Controllers\MessageController');
Route::prefix('admin')->as(('admin.'))->middleware('auth')->group(function(){
    Route::get('/',  'App\Http\Controllers\MessageController@index')->name('dashboard');
    Route::resource('/services',  'App\Http\Controllers\ServiceController')->except('show');
    Route::resource('/portfolios',  'App\Http\Controllers\PortfolioController')->except('show');
    Route::resource('/info',  'App\Http\Controllers\InfoController')->except('show');

}
);