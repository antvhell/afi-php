<?php
namespace Controllers;

use MVC\Router;


class VibrantesController {
    public static function ʙ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vibrantes/ʙ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function r(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vibrantes/r", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vibrantes/ʀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionVibrantes(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vibrantes/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Vibrantes(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vibrantes/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Vibrantes(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vibrantes/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }


    
}
