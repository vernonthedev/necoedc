<?php

use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\CourseRegistrationController;
use App\Http\Controllers\CourseController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('search', [CourseController::class, 'search'])->name('courses.search');
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('course/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('{category_certificate:slug}/{certificate:slug}', [CertificateController::class, 'show'])->name('certificate.show');
Route::get('about-us', function () { return view('about'); })->name('about');
Route::get('job-applications', function () { return view('jobs'); })->name('jobs');
Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::post('contact-us' ,[ContactController::class, 'store'])->name('contact.store');
Route::get('register-for-course', [CourseRegistrationController::class, 'index'])->name('register.course.index');
Route::post('register-for-course', [CourseRegistrationController::class, 'store'])->name('register.course.store');
Route::get('articles', [PostController::class, 'index'])->name('blog');
Route::post('subscribe',[NewsletterSubscriberController::class, 'store'])->name('subscribe.store');
Route::get('{post:slug}', [PostController::class, 'show'])->name('blog.show');

// Downloading files route
Route::get('public/files/{file}', function ($file) {
    $filePath = public_path('files/' . $file);
    
    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        abort(404, 'File not found.');
    }
})->name('file.download');

