<!DOCTYPE html>
<html>
<header>

</header>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form enctype="multipart/form-data" method="post" action="/alta_de_productos/actualizar" name="formProducto">
        @csrf
        <input type="hidden" name="id" value="{{$producto->id}}" >
        Descripcion:<input type="text" name="descripcion" value="{{$producto->descripcion}}"><br/>
        Cantidad:<input type="number" name="cantidad" value="{{$producto->cantidad}}"/><br/>
        Precio:<input type="text" name="precio" value="{{$producto->precio}}" /><br/>
        Descuento:<input type="text" name="descuento" value="{{$producto->descuento}}"/><br/>
        Especificaciones:<input type="text" name="especificaciones" value="{{$producto->especificaciones}}"/><br/>
        Categoria:<select name="categoria" value="{{$producto->categoria}}">
            @foreach ($categorias as $categoria)
                <option value={{$categoria->id}} >{{$categoria->nombre}}</option>
            @endforeach
        </select><br/>
        foto:<input type="file" accept="image/jpeg" name="foto" value="{{$producto->foto}}"><br/>
        <img src="/storage/{{$producto->foto}}" style="width:50px;height:50px"/>
        <input type="submit" value="Actualizar"/>
    </form>
</body>
</html>
