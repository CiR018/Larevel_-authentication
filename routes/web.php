<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NuovoController;

//reindirizzamento alla home
Route::get('/', [NuovoController::class, 'reindirizzaHome'])->name('home');

//route che porta su form di registrazione 
Route::get('/registrati', [NuovoController::class, 'reindirizzaRegistrazione'])->name('pagRegistrazione');
//scrittura nel database dell'utente registrato validando i dati inseriti
Route::post('/registrati', [NuovoController::class, 'validazioneRegistrazioneUtente'])->name('validazioneRegistrazione');



//route che porta su form di login
Route::get('/login', [NuovoController::class, 'reindirizzaLogin' ])->name('pagLogin');
Route::post('/login', [NuovoController::class, 'validazioneLogin'])->name('validazioneLogin');
