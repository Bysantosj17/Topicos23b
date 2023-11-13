<?php

use App\Http\Controllers\ClientesController;
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

Route::controller(ClientesController::class)->group(function(){
    Route::get('clientes', 'InicioClientes')->name('clientes.inicio');
    Route::get('clientes/registro', 'RegistroClientes')->name('clientes.registro');
    Route::get('clientes/detalle_cliente/{cliente}', 'DetalleCliente')->name('clientes.detalle');

    Route::post('clientes', 'AlmacenarRegistro')->name('clientes.almacenar_registro');
});
