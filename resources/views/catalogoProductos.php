<!DOCTYPE html>
<html>
<header>
 <script src="/js/angular.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</header>
<body>
<div ng-app="AppCatalogoProductos" ng-controller="ProductoController">
    <div>
        <input ng-click="eliminarProductos()" ng-prop-disabled="eliminarDesabilitado"
         type="button" name="eliminar" value="Eliminar">
    </div>
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
            <tr ng-repeat="producto in productos">
                <td><input ng-change="clickCheckBox()" ng-model="producto.seleccionado"
                type="checkbox"  name="seleccionado{{$index}}"></td>
                <td>{{producto.id}}</td>
                <td>{{producto.descripcion}}</td>
                <td>{{producto.precio}}</td>
                <td>{{producto.cantidad}}</td>
                <td><a href="/productos/detalle/{{producto.id}}">
                    <img src="storage/{{producto.foto}}">
                </a></td>
            </tr>
        </tbody>
    </table>
</div>
    <script >
let app = angular.module('AppCatalogoProductos',[]);
app.controller('ProductoController', function($scope,$http) {
    $scope.productos = "";
    $scope.eliminarDesabilitado =true;
    $http.get("/catalogo_productos/catalogo")
        .then(function(response) {
            $scope.productos = response.data;
            $scope.productos.forEach(function(producto) {
                producto.seleccionado = false;
            });
        });
    $scope.clickCheckBox = function(){
        let almenosUnoSeleccionado = false;
        $scope.productos.forEach(function(producto) {
                if (producto.seleccionado)
                    almenosUnoSeleccionado = true;
            });
        $scope.eliminarDesabilitado = !almenosUnoSeleccionado;
    };
    $scope.eliminarProductos = function(){
        let productosAEliminar = "";
        $scope.productos.forEach(function(producto) {
            if (producto.seleccionado)
                productosAEliminar += "-"+producto.id;
        });
        $http.get("/catalogo_productos/eliminar/"+productosAEliminar,[])
        .then(function(response) {
            $scope.productos = response.data;
            $scope.productos.forEach(function(producto) {
                producto.seleccionado = false;
        }, function(response) {
            $scope.productos = null;
            $scope.status = response.status;
        });
        });
    };
});

</script>

</body>
</html>
