<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\MentionslegalController;
 

Route::get('/', [AcceuilController::class,'index' ])->name('acceuil.index');

Route::get('/contact', [ContactController::class,'index'] )->name('contact.index');

Route::get('/cours', [CoursController::class,'index'])->name('cours.index');

Route::get('/tarifs',[TarifsController::class,'index' ] )->name('abonnements.index');

Route::get('/mentions', [MentionslegalController::class,'index'])->name('mentionslegal.index');

