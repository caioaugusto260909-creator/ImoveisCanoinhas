<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::redirect('/', '/academia');

Route::get('/fotos', function () {
    return view('fotos');
})->name('fotos');

Route::get('/fotos2', function () {
    return view('fotos2');
})->name('fotos2');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::view('/academia', 'ferrogiz')->name('academia');

Route::post('/contato', ContactController::class)
    ->middleware('throttle:5,1')
    ->name('contact.send');

Route::view('/login', 'login')->name('login');

Route::view('/cadastro', 'cadastro')->name('cadastro');
