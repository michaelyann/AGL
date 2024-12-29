<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('connexion');
});

Route::get('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [AuthController::class, 'inscriptionPost'])->name('inscription.post');

Route::get('/connexion', [AuthController::class, 'connect'])->name('connexion');
Route::post('/connexion', [AuthController::class, 'connectPost'])->name('connexion.post');
Route :: get ('/Acceuil', [AuthController::class, 'home'])->name('home');
Route::get('/deconnexion', [AuthController::class, 'deconnect'])->name('deconnexion');