<?php

use App\Http\Controllers\NewsletterUsersController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// FrontWeb

Route::get('/' , [ FrontController::class , 'index'] )->name('home');

Route::get('/calendar' , [ FrontController::class , 'calendar'] )->name('calendar');

Route::get('/contact' , [ FrontController::class , 'contact'] )->name('contact');

Route::get('/event' , [ FrontController::class , 'event'] )->name('event');


// Events

Route::controller( EventController::class )->prefix('event')->group( function() {

    Route::post('/', 'store')->name('event.store');

});

// Promotions

Route::view('traveloffers/', 'front.traveloffers.index')->name('traveloffers');

Route::post('newsletter/', [NewsletterUsersController::class,'store'])->name('newsletter.store');

// Admin Panel

Route::get('/home', function () {

    return view('admin.home');

});
