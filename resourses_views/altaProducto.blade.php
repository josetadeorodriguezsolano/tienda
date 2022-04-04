<!DOCTYPE html>
<html>
<header>

</header>
<body>
    <form method="post" action="/alta_de_productos/insertar" name="formProducto">
        @csrf
        Descripcion:<input type="text" name="descripcion"/><br/>
        Cantidad:<input type="number" name="cantidad"/><br/>
        Precio:<input type="text" name="precio"/><br/>
        Descuento:<input type="text" name="descuento"/><br/>
        Especificaciones:<input type="text" name="especificaciones"/><br/>
        <input type="submit" value="Insertar"/>
    </form>
</body>
</html>
