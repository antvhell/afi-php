<?php
namespace Controllers;

use MVC\Router;


class VocalesController {

    public static function i(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/i", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function e(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/e", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function a(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/a", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function o(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/o", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function u(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/u", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionVocales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Vocales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Vocales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio3Vocales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales/simbolos-y-caracteristicas/ejercicio-3", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    

  


}
