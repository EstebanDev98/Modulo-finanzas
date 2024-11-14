<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use Illuminate\Routing\RouteRegistrar;

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

Route::get('/', [ServiceController::class,'index'])->name('inicio.index');
Route::get('/vista_prestamos', [ServiceController::class,'ver_servicios'])->name('vista.servicios');
Route::get('/servicio/tarjeta',[ServiceController::class,'ver_tarjetas'])->name('vista.tarjetas');
Route::post('/servicio/prestamos', [ServiceController::class, 'store'])->name('servicio.store');