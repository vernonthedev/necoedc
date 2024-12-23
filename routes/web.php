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
Route::get('contact-us', function () { return view('contact'); })->name('contact');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('grill', function () { return view('grill'); })->name('grill');
Route::get('founder', function () { return view('founder'); })->name('founder');
Route::get('shop', function () { return view('shop'); })->name('shop');
Route::post('contact' ,[ContactController::class, 'store'])->name('contact.store');
Route::get('projects', function () { return view('projects'); })->name('projects');
Route::get('services', function () { return view('services'); })->name('services');
Route::get('frequently-asked-questions', function () { return view('faq'); })->name('faq');
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::post('qoutes', [QuoteController::class, 'store'])->name('quote.store');
Route::post('subscribe',[NewsletterSubscriberController::class, 'store'])->name('subscribe.store');
Route::post('order',[OrderController::class, 'store'])->name('order.store');
Route::get('{post:slug}', [PostController::class, 'show'])->name('blog.show');

