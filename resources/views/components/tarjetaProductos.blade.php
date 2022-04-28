@foreach ($productos as $producto)
<section class="w3-card-4" name="tarjeta">
    <img src="{{$producto->foto}}"> /><br/>
    <span>{{$producto->descripcion}}</span><br/>
    <span>{{$producto->precio}}</span>
</section>
@endforeach
