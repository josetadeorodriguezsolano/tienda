<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pedidoController;
use App\Http\Middleware\validarAdministradorMiddleware;
use App\Http\Middleware\validarUsuario;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

Route::get('/', [ProductoController::class, 'show']);

Route::middleware([validarAdministradorMiddleware::class])->group(function ()
{
    Route::get('/alta_de_productos',function(){
        $categorias = Categoria::all();
        return view("altaProducto",['categorias'=>$categorias]);
    });

    Route::controller(ProductoController::class)->group(function () {
        Route::get('/catalogo_productos/catalogo','catalogo');

        Route::get('/catalogo_productos/eliminar/{ids}','eliminar');

        Route::post('/alta_de_productos/insertar', 'insertar');

        Route::post('/alta_de_productos/actualizar', 'actualizar');

        Route::get('/catalogo_productos/actualizar/{id}', function($id){
            return view('actualizarProducto',["producto"=>Producto::find($id)
                    ,"categorias"=>Categoria::all()]);
        });
    });

    Route::get('/catalogo_productos/catalogo2',function(){
        return view('catalogoProductos2',["productos"=>Producto::all()
                                         ,"categorias"=>Categoria::all()]);
    });

    Route::get('/catalogo_productos',function(){
        return view("catalogoProductos");
    });
});

Route::middleware([validarUsuario::class])->group(function(){
    Route::get('/carrito/procederPago', [CarritoController::class, 'procederPago']);

    Route::post('/procesopago/confirmarcompra',[pedidoController::class,'makePedido']);

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
