<?php
namespace Controllers;

use MVC\Router;


class AproximantesController {
    public static function ʋ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes/ʋ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ɹ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes/ɹ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function j(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes/j", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionAproximantes(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Aproximantes(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Aproximantes(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/aproximantes/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    


}
