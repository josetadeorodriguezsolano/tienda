<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreproductoRequest;
use App\Http\Requests\UpdateproductoRequest;
use App\Models\Producto as ModelsProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function insertar(StoreproductoRequest $request)
    {
        /*$request->validate([
            'descripcion' => 'required|min:5|max:255',
            'precio' => 'required|numeric|gt:0',
            'cantidad' => 'required|integer|gt:0|lt:1000',
            'descuento' => 'required|numeric|between:0,100',
            'especificaciones' => 'required|max:255',
            'categoria' => 'required|integer|exists:categorias,id',
        ]);*/

       $producto = new Producto();
       $producto->descripcion = $request['descripcion'];
       $producto->precio = $request['precio'];
       $producto->cantidad = $request['cantidad'];
       $producto->descuento = $request['descuento'];
       $producto->especificaciones = $request['especificaciones'];
       $producto->categoria_id = $request['categoria'];
       $path = Storage::disk('public')->put('img', $request->file('foto'));
       //$path = Storage::putFileAs('public',$request->file('foto'),'img/'.$clave.'.jpg');
       $producto->foto = $path;
       $producto->save();
       return redirect("alta_de_productos");
    }

    public function actualizar(StoreproductoRequest $request)
    {
       $producto = Producto::find($request['id']);
       $producto->descripcion = $request['descripcion'];
       $producto->precio = $request['precio'];
       $producto->cantidad = $request['cantidad'];
       $producto->descuento = $request['descuento'];
       $producto->especificaciones = $request['especificaciones'];
       $producto->categoria_id = $request['categoria'];
       if ($request->file('foto'))
       {
            $path = Storage::disk('public')->put('img', $request->file('foto'));
            $producto->foto = $path;
       }
       $producto->save();
       return redirect("catalogo_productos/catalogo2");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        $productos = Producto::paginate(12);
        return view('principal',['productos'=>$productos]);
    }

    public function catalogo()
    {
        return Producto::all();
    }

    public function eliminar($ids)
    {
        $idss = explode("-",$ids);
        foreach ($idss as $id) {
            $productos = Producto::where("id",$id)->get();
            foreach ($productos as $producto) {
                $producto->delete();
            }
            //$productos = Producto::find($id);
            //$producto->delete();

        }
        return Producto::all();
    }

    public function masVendidos()
    {
        $productos = Producto::masVendidos();
        return view("catalogoProductos",["productos"=>$productos]);
    }
}
