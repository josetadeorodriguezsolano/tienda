@foreach ($productos as $producto)
<section name="tarjeta">
    <img src="/storage/{{$producto->foto}}" style="width: 100px; height:100px"><br/>
    <span>{{$producto->descripcion}}</span><br/>
    <span>{{$producto->precio}}</span>
</section>
@endforeach
