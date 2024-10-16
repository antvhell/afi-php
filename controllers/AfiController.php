<?php
namespace Controllers;

use MVC\Router;


class AfiController {
    public static function consonantes_pulmonares(Router $router){
        
         // session_start();
         isAuth();
        $router->render("afi/consonantes-pulmonares", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function consonantes_no_pulmonares(Router $router){
         // session_start();
         isAuth();
        $router->render("afi/consonantes-no-pulmonares", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}
