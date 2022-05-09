<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\validarAdministradorMiddleware;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

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
    $categorias = Categoria::all();
    return view("altaProducto",['categorias'=>$categorias]);
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

Route::get('/productos/detalle/{id}',function($id){
    $producto = Producto::find($id);
    if ($producto)
        return view('producto',['producto'=>$producto]);
    else
        return abort(404,'No se encontro');
});

Route::get('login',function (Request $request){
    $error = $request->session()->get('error');
    return view('login',['error'=>$error]);
});

Route::post('login/ingresar',[LoginController::class,'ingresar']);

//require __DIR__.'/auth.php';
