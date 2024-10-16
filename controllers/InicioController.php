<?php
namespace Controllers;

use MVC\Router;


class InicioController {
    public static function index(Router $router){
        // session_start();
        isAuth();
        $router->render("inicio/index", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}

