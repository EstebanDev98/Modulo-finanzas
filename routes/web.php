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
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Cliente;
use App\Models\transferencia;

// Rutas de páginas principales
  Route::get('/', [HomeController::class, 'index']);
  Route::get('/inicio', [ServiceController::class, 'index']);


// Rutas de autenticación
Auth::routes();
Route::post('/login', [LoginController::class, 'showLoginForm'])->name('login.ruta');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Ruta para la página de inicio después del login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas de clientes
Route::get('/clientes/buscar', [ClienteController::class, 'formulario'])->name('cliente.formulario');
Route::post('/clientes/buscar', [ClienteController::class, 'buscar'])->name('cliente.buscar.post');
Route::get('/clientes/detalles/{id}', [ClienteController::class, 'cliente_detalles'])->name('cliente.detalles');


// Ruta para descargar el PDF en PDFController

Route::get('/cliente/{id}/pdf', function ($id) {
    $cliente = Cliente::with(['clienteServicios.servicio', 'clienteServicios.facturas.transacciones'])->findOrFail($id);
    $pdf = Pdf::loadView('clientes.pdf', compact('cliente'));
    return $pdf->stream('cliente_informacion.pdf'); // Usa stream si prefieres verlo en el navegador
})->name('cliente.pdf');


// Ruta para el crud de servicios
Route::get('servicios', [ServicioController::class, 'index'])->middleware('can:servicios.index')->name('servicios.index');
Route::get('servicios/crear', [ServicioController::class, 'create'])->name('servicios.create');
Route::get('servicios/destroy/{id}', [ServicioController::class, 'destroy'])->name('servicios.destroy');
Route::get('servicios/mostrar/{id}', [ServicioController::class, 'show'])->name('servicios.show');
Route::get('servicios/editar/{id}', [ServicioController::class, 'edit'])->name('servicios.edit');
Route::patch('servicios/actualizar', [ServicioController::class, 'update'])->name('servicios.update');
Route::post('servicios/almacenar', [ServicioController::class, 'store'])->name('servicios.store');




// Ruta de luis para ver los servicios
Route::get('/vista_servicios', [ServiceController::class, 'ver_servicios'])->name('ver.servicios');
Route::post('/solicitar_servicio', [ServiceController::class, 'store'])->name('servicio.store');



Route::get('/transferencias', function () {
    return view('transferencias');
})->name('transferencias')->middleware('auth');
