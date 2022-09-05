<?php 
    //var_dump($carrito_productos);
    $total = 0;
?>

<div class="contenedor_proceso_pago">
    <form action="/procesopago/confirmarcompra" method="POST">
        @csrf
        <div class="contenedor_datosPedido">
            <h2 class="titulo">Tarjeta pago</h2>
                <p class="text">Se utilizara la tarjeta con finalizacion: ****<?= Str::substr($usuario->tarjeta_credito, 12, 4) ?></p>
            <hr class="borde">
            <h2 class="titulo">Tipo de envio</h2>
                <select name="opcion_envio" class="select">
                    <option value="normal">Normal</option>
                    <option value="expres">Expres</option>
                </select>
            <h2 class="titulo">Productos</h2>
            <div class="contenedor_tarjetas">
                @foreach ($carrito_productos as $carrito)
                <div class="tarjeta_producto_procesoP">
                    <div><img src="{{$carrito->producto->foto}}" class="img_producto"></div>
                    <div>
                        <p class="texto"><strong>Nombre:</strong> {{$carrito->producto->descripcion}}</p>
                        <p class="texto"><strong>Categoria:</strong> {{$carrito->producto->categoria->nombre}}</p>
                    </div>
                    <div><p class="texto"> <strong>Total:</strong> {{$carrito->producto->precio-$carrito->producto->descuento}}</p></div>
                </div>
                <br><hr>
                <?php
                    $total += $carrito->producto->precio - $carrito->producto->descuento;
                ?>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="titulo">Subtotal</h2>
            <p class="text"> Total: ${{$total}}.00</p>
            <input type="submit" value="Confirmar compra" class="botonSubmit">
        </div>
        
    </form>
</div>