<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

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

// Ruta para la página principal
Route::get('/', [HomeController::class, 'index']);

// Rutas de autenticación
Auth::routes();

Route::get('/clientes/buscar', [ClienteController::class, 'formulario'])->name('cliente.formulario');

Route::post('/clientes/buscar', [ClienteController::class, 'buscar'])->name('cliente.buscar.post');

Route::get('/clientes/detalles/{id}', [ClienteController::class, 'cliente_detalles'])->name('cliente.detalles');

//Route::get('clientes', [HomeController::class, 'clientes'])->name('clientes.index');

//Route::get('/cliente/detalles', [HomeController::class, 'cliente_detalles'])->name('cliente.detalles');

// Ruta para la página de inicio después del login
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login');



