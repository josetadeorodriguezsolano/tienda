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
    <form enctype="multipart/form-data" method="post" action="/alta_de_productos/insertar" name="formProducto">
        @csrf
        Descripcion:<input type="text" name="descripcion" value="{{old('descripcion')}}"/><br/>
        Cantidad:<input type="number" name="cantidad" value="{{old('cantidad')}}"/><br/>
        Precio:<input type="text" name="precio" value="{{old('precio')}}" /><br/>
        Descuento:<input type="text" name="descuento" value="{{old('descuento')}}"/><br/>
        Especificaciones:<input type="text" name="especificaciones" value="{{old('especificaciones')}}"/><br/>
        Categoria:<select name="categoria" value="{{old('categoria')}}">
            @foreach ($categorias as $categoria)
                <option value={{$categoria->id}} >{{$categoria->nombre}}</option>
            @endforeach
        </select><br/>
        foto:<input type="file" accept="image/jpeg" name="foto" :value="old('foto')"><br/>
        <input type="submit" value="Insertar"/>
    </form>
</body>
</html>
