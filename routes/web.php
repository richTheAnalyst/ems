<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Event_controller;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/contact', [ContactController::class,'index'])->name('contact');

//BLOG
Route::get('/blog', [BlogController::class,'index'])->name('blog');

//EVENTS
Route::get('/events/event', [Event_controller::class,'index'])->name('event');

//PAGES
//about route
Route::get('/pages/about', [AboutController::class,'index'])->name('about');
//Faq route
Route::get('/pages/faq', [FaqController::class,'index'])->name('faq');
