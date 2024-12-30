<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('connexion');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/inscription', [AuthController::class, 'inscription'])->name('inscription');
    Route::post('/inscription', [AuthController::class, 'inscriptionPost'])->name('inscription.post');
    Route::get('/connexion', [AuthController::class, 'connect'])->name('connexion');
    Route::post('/connexion', [AuthController::class, 'connectPost'])->name('connexion.post');
});

Route::group(['middleware' => 'auth'], function () {
    Route :: get ('/Acceuil', [HomeController::class, 'home'])->name('Acceuil');
    Route::delete('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
});