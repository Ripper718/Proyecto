<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ /* rutas de acceso a las vistas */






Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('bitacoras',App\Http\Controllers\BitacoraController::class);
Route::resource('politicas',App\Http\Controllers\PoliticaController::class);
Route::resource('ayudas',App\Http\Controllers\AyudaController::class);
Route::resource('empleados',App\Http\Controllers\EmpleadoController::class);

