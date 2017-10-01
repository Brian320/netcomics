var app = angular.module("NetComicsCore", []);
//
app.controller("headerNavbar", function($scope) {
    $scope.menu = ["Perfil", "Notificaciones", "Configuración", "Cerrar Sesión"];
});
