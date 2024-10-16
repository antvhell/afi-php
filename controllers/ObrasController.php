<?php
namespace Controllers;

use MVC\Router;


class ObrasController {
    public static function obrasConsultadas(Router $router){
        // session_start();
        isAuth();
        $router->render("obras/obras-consultadas", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

}
