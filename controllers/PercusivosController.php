<?php
namespace Controllers;

use MVC\Router;


class PercusivosController {
    public static function ⱱ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/percusivas/ⱱ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɾ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/percusivas/ɾ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɽ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/percusivas/ɽ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Percusivas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/percusivas/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Percusivas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/percusivas/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionPercusiva(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/percusivas/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    
    

}
