<?php

use App\Http\Controllers\Top\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'page'])->name('home');

require __DIR__.'/discord.php';

