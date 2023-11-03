<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamisaPersController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\Historial_comprasController;
use App\Http\Controllers\Producto_colortallasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TallasController;

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
Route::resource('/camisa', CamisaPersController::class );
Route::resource('/cat', CategoriasController::class );

Route::get('/categorias',[CategoriasController::class,'index'])->name('categorias.index');
Route::post('/categorias',[CategoriasController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{id}',[CategoriasController::class, 'destroy'])->name('categorias.destroy');
Route::put('/categorias/{id}',[CategoriasController::class, 'update'])->name('categorias.update');
Route::get('/categorias/{id}',[CategoriasController::class, 'edit'])->name('categorias.edit');




Route::get('/', function () {
    return view('productos/visual');
});
