<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\OrderController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', function () { return view('about'); })->name('about');
Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::post('contact-us' ,[ContactController::class, 'store'])->name('contact.store');
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::post('subscribe',[NewsletterSubscriberController::class, 'store'])->name('subscribe.store');
Route::get('{post:slug}', [PostController::class, 'show'])->name('blog.show');

