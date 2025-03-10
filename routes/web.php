<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//CONTACT
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

//BLOG
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

//EVENTS
Route::get('/events/event', [EventController::class,'index'])->name('event');
Route::get('/events/{event}/book', [EventController::class, 'book'])->name('book.event');
Route::post('/events/store', [BookingController::class, 'store'])->name('book.event.submit');



//PAGES
//about route
Route::get('/pages/about', [AboutController::class,'index'])->name('about');
//Faq route
Route::get('/pages/faq', [FaqController::class,'index'])->name('faq');
