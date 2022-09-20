@foreach ($productos as $producto)
<section producto_id="{{$producto->id}}"
     name="tarjeta">
    <img src="/storage/{{$producto->foto}}">
    <span>{{$producto->descripcion}}</span>
    <span>{{$producto->precio}}</span>
    <button>agregar al carrito</button>
</section>
@endforeach
