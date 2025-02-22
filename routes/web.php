<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/aboutme', function () {
    return view('aboutme.aboutme');
})->name('aboutme');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('/work', function () {
    return view('work.work');
})->name('work');
