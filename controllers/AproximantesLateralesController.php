<?php
namespace Controllers;

use MVC\Router;


class AproximantesLateralesController {
    public static function l(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes-laterales/l", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʎ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes-laterales/ʎ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    public static function ʟ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes-laterales/ʟ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionAproximantesLaterales(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes-laterales/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1AproximantesLaterales(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes-laterales/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2AproximantesLaterales(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes-laterales/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    

}
