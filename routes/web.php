<?php

use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

$events = Event::all();

Route::view('/' ,'front.index', compact('events'))->name('home');

Route::get('/calendar' ,[EventController::class, 'index'])->name('calendar');

Route::view('/contact' ,'front.contact.index')->name('contact');


Route::controller(EventController::class)->prefix('event')->group(function() {
    Route::post('/', 'store')->name('event.store');
});

Route::get('/home', function () {
    return view('home');
});
