<?php
namespace Controllers;

use MVC\Router;


class ArticulatoriaController {
    public static function consonantes_pulmonares(Router $router){
        
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/consonantes-pulmonares", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
            
        ]);
    }

    public static function consonantes_no_pulmonares(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/consonantes-no-pulmonares", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function vocales(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/vocales", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function p(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/p", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function b(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/b", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function t(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/t", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function d(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/d", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʈ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/ʈ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɖ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/ɖ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function c(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/c", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɟ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/ɟ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function k(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/k", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɡ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/ɡ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function q(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/q", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɢ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/ɢ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʔ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/ʔ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio3(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-3", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio4(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-4", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio5(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/oclusivas/simbolos-y-caracteristicas/ejercicio-5", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }



}
