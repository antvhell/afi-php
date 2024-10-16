<?php
namespace Controllers;

use MVC\Router;


class FricativasLatController {
    public static function ɬ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/fricativas-laterales/ɬ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionFricativasLat(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/fricativas-laterales/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    

}
