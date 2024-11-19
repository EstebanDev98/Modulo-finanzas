<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use Illuminate\Routing\RouteRegistrar;

// Rutas de páginas principales
Route::get('/', [HomeController::class, 'index']);

// Rutas de autenticación
Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Ruta para la página de inicio después del login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas de clientes
Route::get('/clientes/buscar', [ClienteController::class, 'formulario'])->name('cliente.formulario');
Route::post('/clientes/buscar', [ClienteController::class, 'buscar'])->name('cliente.buscar.post');
Route::get('/clientes/detalles/{id}', [ClienteController::class, 'cliente_detalles'])->name('cliente.detalles');


// Ruta para descargar el PDF en PDFController
Route::get('/cliente/{id}/download-pdf', [PDFController::class, 'downloadClientePDF'])->name('cliente.download_pdf');

// Ruta para el crud de servicios
Route::resource('servicios', 'destroy');

