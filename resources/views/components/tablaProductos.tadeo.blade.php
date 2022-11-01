    <table>
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
                <td>{{$producto->id}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->cantidad}}</td>
                <td><img src="/storage/{{$producto->foto}}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
