<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ServicioController;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;

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

//ruta para descargar archivos pdf



// Ruta para la página principal
Route::get('/', [HomeController::class, 'index']);

// Rutas de autenticación
Auth::routes();

Route::get('/clientes/buscar', [ClienteController::class, 'formulario'])->name('cliente.formulario');

Route::post('/clientes/buscar', [ClienteController::class, 'buscar'])->name('cliente.buscar.post');

Route::get('/clientes/detalles/{id}', [ClienteController::class, 'cliente_detalles'])->name('cliente.detalles');

Route::get('/cliente/{id}/pdf', function ($id) {
    $cliente = Cliente::with(['clienteServicios.servicio', 'clienteServicios.facturas.transacciones'])->findOrFail($id);
    $pdf = Pdf::loadView('clientes.pdf', compact('cliente'));
    return $pdf->download('cliente_informacion.pdf');
})->name('clientes.pdf');

//Route::get('clientes', [HomeController::class, 'clientes'])->name('clientes.index');

//Route::get('/cliente/detalles', [HomeController::class, 'cliente_detalles'])->name('cliente.detalles');


// Ruta para la página de inicio después del login
Route::get('/home', [HomeController::class, 'index'])->name('home');

//ruta para el login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

//ruta para el registro de ususarios
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

//ruta para el crud de servicios
Route::resource('servicios', ServicioController::class);