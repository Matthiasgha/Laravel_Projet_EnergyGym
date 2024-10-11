<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cours', function () {
    return view('cours');
})->name('cours');

Route::get('/tarifs', function () {
    return view('tarifs');
})->name('abonnements');

Route::get('/mentions', function () {
    return view('mentions');
})->name('mentions');

