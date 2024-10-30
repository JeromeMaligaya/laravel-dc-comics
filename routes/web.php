<?php

use App\Http\Controllers\SneakerController;
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

Route::get('/sneakers', [SneakerController::class, "index"])->name("sneaker-index");
Route::get('/sneakers/create', [SneakerController::class, "create"])->name("sneaker-create");
Route::get('/sneakers/{id}', [SneakerController::class, "show"])->name("sneaker-show");
Route::post('/sneakers', [SneakerController::class, "store"])->name("sneaker-store");
Route::get('/sneakers/{id}/edit', [SneakerController::class, "edit"])->name("sneaker-edit");
Route::put('/sneakers/{id}', [SneakerController::class, "update"])->name("sneaker-update");
