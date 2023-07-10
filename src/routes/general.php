<?php

use App\Http\Controllers\General\Home;
use App\Http\Controllers\General\Works;
use App\Http\Controllers\General\About;
use App\Http\Controllers\General\Contact;

use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'page'])->name('home');

Route::get('/works', [Works::class, 'page'])->name('works');
Route::get('/works/{page_name}', [Works::class, 'info'])->name('work');

Route::get('/about', [About::class, 'page'])->name('about');

Route::get('/contact', [Contact::class, 'page'])->name('contact');
Route::post('/contact', [Contact::class, 'sendEmail'])->name('contact');
