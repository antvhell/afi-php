<?php
namespace Controllers;

use MVC\Router;


class ClicsController {
    public static function ʘ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/ʘ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ǀ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/ǀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ǃ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/ǃ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ǂ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/ǂ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ǁ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/ǁ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionClics(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Clics(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Clics(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/clics/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }


}
