<?php

use App\Http\Controllers\FAQController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\WebinarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Tentang
Route::get('/dataTentang', [TentangController::class, 'index']);

// Webinar
Route::get('/dataWebinar', [WebinarController::class, 'index']);

// Peta
Route::get('/dataPeta', [PetaController::class, 'index']);

// FAQ
Route::get('/dataFAQ', [FAQController::class, 'index']);
