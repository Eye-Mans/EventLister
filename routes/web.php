<?php

use App\Http\Controllers\AcaraController;
use App\Models\Acara;
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


Route::get('/table', [AcaraController::class,"index"]);

Route::get('/add', [AcaraController::class,"create"]);

Route::post('/store', [AcaraController::class,"store"]);

Route::get('/{id}/edit', [AcaraController::class,"edit"]);

Route::put('/update/{id}', [AcaraController::class,"update"]);

Route::delete('/update/{id}', [AcaraController::class,"destroy"]);
