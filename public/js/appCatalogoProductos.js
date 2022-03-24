let app = angular.module('AppCatalogoProductos');
app.controller('ProductoController', function($scope,$http) {
    $scope.productos = "";
    $http.get("/catalogo_productos/catalogo")
        .then(function(response) {
            $scope.productos = response.data;
         });
  });
