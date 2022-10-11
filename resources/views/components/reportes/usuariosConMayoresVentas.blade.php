<table>
    <tr>
        <th>Nombre</th>
        <th>vendido</th>
    </tr>
@foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->vendido}}</td>
    </tr>
@endforeach
</table>
