<?php
namespace Controllers;

use MVC\Router;


class NasalesController {
    public static function m(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/m", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɱ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/ɱ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function n(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/n", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɳ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/ɳ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɲ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/ɲ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ŋ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/ŋ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    
    public static function ejercicio1Nasales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Nasales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionNasales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/nasales/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    
}
