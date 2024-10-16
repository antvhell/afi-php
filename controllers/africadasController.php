<?php
namespace Controllers;

use MVC\Router;


class AfricadasController {
    public static function ʦ(Router $router){
        // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/ʦ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʣ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/ʣ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʧ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/ʧ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ʤ(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/ʤ", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio1Africadas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-1", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio2Africadas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-2", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function ejercicio3Africadas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/simbolos-y-caracteristicas/ejercicio-3", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function transcripcionAfricadas(Router $router){
         // session_start();
        isAuth();
        $router->render("fonetica-articulatoria/africadas/transcripcion", [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    
    


}
