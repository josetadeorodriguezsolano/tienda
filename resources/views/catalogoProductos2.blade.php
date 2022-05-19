<!DOCTYPE html>
<html>
<header>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</header>
<body>
<div >
    <table class="w3-table-all w3-hoverable">
        <thead>
        <tr>
            <th>id</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Imagen</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td><a href="/catalogo_productos/actualizar/{{$producto->id}}" ><button>editar</button></td>
                <td>{{$producto->id}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->cantidad}}</td>
                <td><a href="/productos/detalle/{{$producto->id}}">
                    <img style="width: 50px; height:50px" src="/storage/{{$producto->foto}}">
                </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
