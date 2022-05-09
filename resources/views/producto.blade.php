<!DOCTYPE html>
<html>
<header>
 <script src="/js/angular.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</header>
<body>
   <img src="/storage/{{$producto->foto}}" style="float: left">
   <div style="float: left">
    Descripcion: <h4>{{$producto->descripcion}}</h4>
    <span>Precio: ${{$producto->precio}}</span><br/>
    @if ($producto->descuento>0)
        <span>Descuento: ${{$producto->descuento}}</span>
    @endif
   </div>
</body>
</html>
