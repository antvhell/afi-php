<?php
namespace Controllers;

use MVC\Router;


class ImplosivasController {
    public static function ɓ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/ɓ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɗ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/ɗ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʄ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/ʄ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɠ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/ɠ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʛ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/ʛ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionImplosivas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Implosivas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Implosivas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/implosivas/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    


}
