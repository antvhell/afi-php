<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;


class Email {
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }


    public function enviarConfirmacion() {
        // Crear el objeto de Email
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = $_ENV['EMAIL_HOST'];
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $_ENV['EMAIL_PORT'];
        $phpmailer->Username = $_ENV['EMAIL_USER'];
        $phpmailer->Password = $_ENV['EMAIL_PASS'];

        $phpmailer->setFrom('cuentas@guiafonetica.colmex.mx');
        $phpmailer->addAddress('cuentas@guiafonetica.colmex.mx','guiafonetica.colmex.mx');
        $phpmailer->Subject = 'Confirma tu cuenta';

         // Set HTML
         $phpmailer->isHTML(TRUE);
         $phpmailer->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->email .  "</strong>. Has creado tu cuenta en Guía Práctica de Fonética. Estamos validando tus datos y, una vez que tu cuenta sea confirmada, te enviaremos un correo electrónico</p>";
        //  $contenido .= "<p>Presiona aquí: <a href='".$_ENV['APP_URL']."/confirmar-cuenta?token=".$this->token."'>Confirmar Cuenta</a>";
         $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $phpmailer->Body = $contenido;

         //Enviar el mail
         $phpmailer->send();
    }


    public function enviarInstrucciones(){

         // Crear el objeto de Email
         $phpmailer = new PHPMailer();
         $phpmailer->isSMTP();
         $phpmailer->Host = $_ENV['EMAIL_HOST'];
         $phpmailer->SMTPAuth = true;
         $phpmailer->Port = $_ENV['EMAIL_PORT'];
         $phpmailer->Username = $_ENV['EMAIL_USER'];
         $phpmailer->Password = $_ENV['EMAIL_PASS'];
 
         $phpmailer->setFrom('cuentas@guiafonetica.colmex.mx');
         $phpmailer->addAddress('cuentas@guiafonetica.colmex.mx','guiafonetica.colmex.mx');
         $phpmailer->Subject = 'Reestablece tu contraseña';
 
          // Set HTML
          $phpmailer->isHTML(TRUE);
          $phpmailer->CharSet = 'UTF-8';
 
          $contenido = '<html>';
          $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu contraseña, sigue el siguiente enlace para hacerlo</p>";
          $contenido .= "<p>Presiona aquí: <a href='".$_ENV['APP_URL']."/recuperar?token=".$this->token."'>Reestablecer Contraseña</a>";
          $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
          $contenido .= '</html>';
          $phpmailer->Body = $contenido;
 
          //Enviar el mail
          $phpmailer->send();




    }
}