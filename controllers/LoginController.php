<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        $alertas = [];



        if($_SERVER[ "REQUEST_METHOD" ] === "POST" ){
            $auth = new Usuario($_POST);

            $alertas = $auth->validarLogin();

            if(empty($alertas)){
                // Comprobar que exista el usuario
                $usuario = Usuario::where("email", $auth->email);
                

                if($usuario) {
                    // Verificar el password
                    if ($usuario->comprobarPasswordAndVerificado($auth->password) ){
                        
                        session_start();
                        $_SESSION["id"] = $usuario->id;
                        $_SESSION["nombre"] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION["email"] = $usuario->email;
                        $_SESSION["login"] = true;

                        // Redireccionamiento
                        if($usuario->admin === "1"){
                            $_SESSION["admin"] = $usuario->admin ?? NULL;
                            header("Location: /admin");
                        } else {
                            header("Location: /inicio");
                        }

                        // debuguear($_SESSION);
                    }
                } else {
                    Usuario::setAlerta("error", "Usuario no encontrado");
                }
            }
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/login',[
            "alertas" => $alertas
        ]);
    }

    public static function logout() {
        session_start();
        $_SESSION = [];
        header('Location: /');
    }

    public static function crear(Router $router) {
        $usuario = new Usuario;
    
        // Alertas vacías
        $alertas = [];
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sincroniza los datos del formulario
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();
    
            // Verificar si no hay alertas
            if (empty($alertas)) {
                // Verificar que el usuario no esté registrado
                $resultado = $usuario->existeUsuario();
    
                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    // Manejo del archivo subido
                    if (isset($_FILES['ficha_pago'])) {
                        // Directorio de destino
                        $target_dir = '../public/build/uploads/';
                    
                        // Nombre del archivo
                        $file_name = basename($_FILES['ficha_pago']['name']); // Solo el nombre del archivo
                    
                        // Ruta completa para mover el archivo
                        $target_file = $target_dir . $file_name;
                        
                        // Verifica si el archivo fue subido correctamente
                        if (move_uploaded_file($_FILES['ficha_pago']['tmp_name'], $target_file)) {
                            // Guardar solo el nombre del archivo en el objeto $usuario
                            $usuario->ficha_pago = $file_name;
                        } else {
                            $alertas[] = "Error al subir la ficha de pago.";
                        }
                    }
    
                    if (empty($alertas)) {
                        // Hashear el password
                        $usuario->hashPassword();
    
                        // Generar un token único
                        $usuario->crearToken();
    
                        // Enviar email de confirmación
                        $email = new Email($usuario->nombre, $usuario->email, $usuario->token);
                        $email->enviarConfirmacion();
    
                        // Guardar el usuario en la base de datos
                        $resultado = $usuario->guardar();
    
                        if ($resultado) {
                            header('Location: /mensaje');
                        }
                    }
                }
            }
        }
    
        $router->render('auth/crear-cuenta', [
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function olvide(Router $router) {
        $alertas = [];
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $auth = new Usuario($_POST);
            $alertas = $auth->validarEmail();

            if(empty($alertas)){
               $usuario = Usuario::where("email", $auth->email);

               if($usuario && $usuario->confirmado === "1"){

                // Generar un token
                $usuario->crearToken();
                $usuario->guardar();

                // Enviar e email
                $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                $email->enviarInstrucciones();

                // Alerta de exito
                Usuario::setAlerta("exito","Revisa tu correo electrónico");
               } else {
                Usuario::setAlerta("error","El usuario no existe o no esta confirmado");
               }
            }
        }
        $alertas = Usuario::getAlertas();
        $router->render('auth/olvide-password',[
            "alertas" => $alertas
        ]);
    }

    public static function recuperar(Router $router) {
        $alertas = [];
        $error = false;

        $token = s($_GET["token"]);

        // Buscar usuario por su token
        $usuario = Usuario::where("token", $token);
        if(empty($usuario)){
            Usuario::setAlerta("error", "Token no válido");
            $error = true;
        }

       if($_SERVER["REQUEST_METHOD"] === "POST"){
        // Leer el nuevo password y guardarlo
        $password = new Usuario($_POST);
        $alertas = $password->validarPassword();

        if(empty($alertas)){
            $usuario->password = NULL;

            $usuario->password = $password->password;
            $usuario->hashPassword();
            $usuario->token = "NULL";
            // debuguear($usuario);
            $resultado = $usuario->guardar();
            if($resultado){
                header("Location: /");
            }
        }

       }

        $alertas = Usuario::getAlertas();
        $router->render("auth/recuperar-password",[
            "alertas" => $alertas,
            "error" => $error
       ]);
    }

    


    public static function mensaje(Router $router){
        $router->render("auth/mensaje");
    }


    public static function confirmar(Router $router){
        $alertas = [];
        $token = s($_GET['token']);
        $usuario = Usuario::where('token', $token);
        // debuguear($usuario);

        if(empty($usuario)){
            // mostrar mensaje de error
            Usuario::setAlerta('error', 'Token no válido');
        } else {
            $usuario->confirmado = "1";
            $usuario->token = "NULL";
            $usuario->guardar();
            Usuario::setAlerta('exito', 'Cuenta comprobada correctamente');
        }

        // Obtener las alertas
        $alertas = Usuario::getAlertas();
        // Renderizar la vista
        $router->render("auth/confirmar-cuenta",[
            "alertas" => $alertas
        ]);
    }


}

