<?php
namespace Controllers;

use MVC\Router;


class AcusticaController {

    public static function acustica(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-acustica/acustica", [
             'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Ondas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-acustica/tipos-de-ondas/ejercicio-1", [
             'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Ondas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-acustica/tipos-de-ondas/ejercicio-2", [
             'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio3Ondas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-acustica/tipos-de-ondas/ejercicio-3", [
             'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio4Ondas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-acustica/tipos-de-ondas/ejercicio-4", [
             'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio5Ondas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-acustica/tipos-de-ondas/ejercicio-5", [
             'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio6Ondas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-acustica/tipos-de-ondas/ejercicio-6", [
             'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }



}
