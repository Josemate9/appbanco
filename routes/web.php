<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ClienteController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\ClienteController::class, 'index'])->name('home');
Route::post('home', [App\Http\Controllers\ClienteController::class, 'store'])->name('home.store');
Route::put('home/{cliente}', [App\Http\Controllers\ClienteController::class, 'update'])->name('home.update');
Route::delete('home/{cliente}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('home.destroy');
//rutas autores
Route::get('autores', [App\Http\Controllers\AutoresController::class, 'index'])->name('autores');
Route::post('autores', [App\Http\Controllers\AutoresController::class, 'store'])->name('autores.store');
Route::put('autores/{autores}', [App\Http\Controllers\AutoresController::class, 'update'])->name('autores.update');
Route::delete('autores/{autores}', [App\Http\Controllers\AutoresController::class, 'destroy'])->name('autores.destroy');

//ruta lectores
Route::get('Lectores', [App\Http\Controllers\LectoresController::class, 'index'])->name('Lectores');
Route::post('Lectores', [App\Http\Controllers\LectoresController::class, 'store'])->name('Lectores.store');
Route::delete('Lectores/{Lectores}', [App\Http\Controllers\LectoresController::class, 'destroy'])->name('Lectores.destroy');

