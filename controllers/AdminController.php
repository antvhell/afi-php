<?php
namespace Controllers;

use MVC\Router;


class AdminController {
    public static function index(Router $router){
        // session_start();
        isAuth();
        $router->render("admin/index", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }


    public static function editarUsuario(Router $router){
        // session_start();
        isAuth();
        $router->render("admin/editar-usuario", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }


}

