<?php

use App\Http\Controllers\HolaController;
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
  return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post("/hola", [HolaController::class, "saludar"])->name("saludo");

Route::get("saludos", [HolaController::class, "saludos"])->name("listar");

Route::get("editar/{id}", [HolaController::class, "editar"])->name("editar");

Route::post("editar/{id}", [HolaController::class, "actualizar"])->name("actualizar");

Route::post("eliminar/{id}", [HolaController::class, "eliminar"])->name("eliminar");
