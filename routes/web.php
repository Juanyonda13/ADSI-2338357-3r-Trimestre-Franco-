<?php

use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\Ejercicio3Controller;
use App\Http\Controllers\Ejercicio4Controller;
use App\Http\Controllers\Ejercicio5Controller;
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
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
return view('Template.Template');
});

Route::get('/Ejercicio1',[Ejercicio1Controller::class,'verEjercicio1'])
->name('Ejercicio1');
Route::Post('/Resultado_Ej1',[Ejercicio1Controller::class,'suma'])
->name('Resultado_Ej1');
Route::get('/Ejercicio2',[Ejercicio2Controller::class,'verEjercicio2'])
->name('Ejercicio2');
Route::Post('/Resultado_Ej2',[Ejercicio2Controller::class,'workedHours'])
->name('Resultado_Ej2');
Route::get('/Ejercicio3',[Ejercicio3Controller::class,'verEjercicio3'])
->name('Ejercicio3');
Route::Post('/Resultado_Ej3',[Ejercicio3Controller::class,'sum'])
->name('Resultado_Ej3');
Route::get('/Ejercicio4',[Ejercicio4Controller::class,'verEjercicio4'])
->name('Ejercicio4');
Route::Post('/Resultado_Ej4',[Ejercicio4Controller::class,'cylinder'])
->name('Resultado_Ej4');
Route::get('/Ejercicio5',[Ejercicio5Controller::class,'verEjercicio5'])
->name('Ejercicio5');
Route::Post('/Resultado_Ej5',[Ejercicio5Controller::class,'note'])
->name('Resultado_Ej5');

