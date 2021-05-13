<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'layout');

Route::view("/ingreso-producto", "ingresarProducto");
Route::post("/guardar-producto", [ProductoController::class, "guardar"], ["dato", request()])->name("Guardar Producto");
Route::get("/mostrar-producto", [ProductoController::class, "mostrar"]);

Route::view("/ingreso-direccion", "ingresarDireccion");
Route::post("/guardar-direccion", [DireccionController::class, "guardar"], ["dato", request()])->name("Guardar Direccion");
Route::get("/mostrar-direccion", [DireccionController::class, "mostrar"]);

Route::view("/ingreso-cliente", "ingresarCliente");
Route::post("/guardar-cliente", [ClienteController::class, "guardar"], ["dato", request()])->name("Guardar Cliente");
Route::get("/mostrar-cliente", [ClienteController::class, "mostrar"]);

Route::view("/ingreso-compra", "ingresarCompra");
Route::post("/guardar-compra", [CompraController::class, "guardar"], ["dato", request()])->name("Guardar Compra");
Route::get("/mostrar-compra", [CompraController::class, "mostrar"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
