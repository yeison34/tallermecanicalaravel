<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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

<<<<<<< HEAD
Route::get('/Index',[ProductoController::class,'Index'])->name('Index');
Route::get('/ListadoProductos',[ProductoController::class,'ListadoProductos'])->name('ListadoProductos');
Route::get('/Producto/{id}',[ProductoController::class,'Producto'])->name('Producto');
=======
Route::get('/login','LoginController@Login')->name('login');
Route::get('/registrologin','LoginController@RegistroLogin')->name('registrarse');
Route::get('/principal','LoginController@Principal');
>>>>>>> 416f09d (controlador registro)
