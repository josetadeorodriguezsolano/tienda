<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Middleware\validarAdministradorMiddleware;

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

Route::get('/', [ProductoController::class, 'show']);

Route::get('/alta_de_productos',function(){
    return view("altaProducto");
});

Route::middleware([validarAdministradorMiddleware::class])->group(function ()
{
    Route::get('/catalogo_productos',function(){
        return view("catalogoProductos");
    });

    Route::get('/catalogo_productos/catalogo',[ProductoController::class,'catalogo']);

    Route::get('/catalogo_productos/eliminar/{ids}',[ProductoController::class,'eliminar']);

    Route::post('/alta_de_productos/insertar',[ProductoController::class, 'insertar']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/productos/masvendidos',[ProductoController::class,'masVendidos']);

Route::get('/principal',function(){
    return view('layouts.general');
});


require __DIR__.'/auth.php';
