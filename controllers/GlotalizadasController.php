<?php
namespace Controllers;

use MVC\Router;


class GlotalizadasController {
    public static function pˀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/pˀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function tˀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/tˀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function kˀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/kˀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function qˀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/qˀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function sˀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/sˀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʦˀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/ʦˀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʧˀ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/ʧˀ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Glotalizadas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Glotalizadas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio3Glotalizadas(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/glotalizadas/simbolos-y-caracteristicas/ejercicio-3", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }


}
