<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestationController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/prestations', [PrestationController::class,'index']);
Route::get('/prestations/creer', [PrestationController::class,'create']);
Route::post('/prestations/creer', [PrestationController::class,'store']);
Route::get('/prestation/{id}', [PrestationController::class,'show']);
Route::get('/prestation/{id}/modifier', [PrestationController::class,'edit']);
Route::post('/prestation/{id}/modifier', [PrestationController::class,'update']);
Route::get('/prestation/{id}/supprimer', [PrestationController::class,'destroy']);

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);
