<!DOCTYPE html>
<html>
<header>

</header>
<body>
    <form enctype="multipart/form-data" method="post" action="/alta_de_productos/insertar" name="formProducto">
        @csrf
        Descripcion:<input type="text" name="descripcion"/><br/>
        Cantidad:<input type="number" name="cantidad"/><br/>
        Precio:<input type="text" name="precio"/><br/>
        Descuento:<input type="text" name="descuento"/><br/>
        Especificaciones:<input type="text" name="especificaciones"/><br/>
        Categoria:<select name="categoria">
            @foreach ($categorias as $categoria)
                <option value={{$categoria->id}} >{{$categoria->nombre}}</option>
            @endforeach
        </select><br/>
        foto:<input type="file" accept="image/jpeg"  name="foto"><br/>
        <input type="submit" value="Insertar"/>
    </form>
</body>
</html>
