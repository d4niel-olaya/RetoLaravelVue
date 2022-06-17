<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEmployees;
use App\Http\Controllers\ControllerContract;
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
//Inicio
Route::view('/', 'welcome');
// Sección empleados
Route::view('/employees', 'indexEmployees');
// Crear empleados vista
Route::view('/createEmployees', 'createEmployee');
Route::view('/contracts', 'indexContract');

Route::controller(ControllerEmployees::class)->group(function(){
    Route::get('/show', 'index');
    Route::post('/createEmployee',  'insertar')->name('Create');
});

Route::get('/showContracts', [ControllerContract::class, 'showContracts']);
Route::post('/update',[ControllerContract::class, 'update'])->name('update');