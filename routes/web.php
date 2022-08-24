<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/' ,'front.index')->name('home');

Route::view('/calendar' ,'front.calendar.index')->name('calendar');

Route::view('/contact' ,'front.contact.index')->name('contact');

Route::get('/home', function () {
    return view('home');
});
