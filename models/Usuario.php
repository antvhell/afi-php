<?php
namespace Model;

class Usuario extends ActiveRecord {

    // Base de datos
    protected static $tabla = "usuarios";
    protected static $columnasDB = ["id", "nombre", "apellido", "email", "password", "institucion", "admin", "confirmado", "token","fecha_expiracion","ficha_pago"];
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $institucion;
    public $admin;
    public $confirmado;
    public $token;
    public $fecha_inicio;
    public $fecha_expiracion;
    public $ficha_pago;

    public function __construct ($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->institucion = $args['institucion'] ?? '';
        $this->admin = $args['admin'] ?? "0";
        $this->confirmado = $args['confirmado'] ?? "0";
        $this->token = $args['token'] ?? '';
        $this->fecha_inicio = $args['fecha_inicio'] ?? '';
        $this->fecha_expiracion = $args['fecha_expiracion'] ?? '';
        $this->ficha_pago = $args['ficha_pago'] ?? '';
    }

    // Mensajes de validación para la creacion de una cuenta

    public function validarNuevaCuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = "El nombre es obligatorio";
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = "El apellido es obligatorio";
        }
        if(!$this->institucion) {
            self::$alertas['error'][] = "La Institucion es obligatoria";
        }
        if(!$this->email) {
            self::$alertas['error'][] = "El correo electrónico es obligatorio";
        }
        if(!$this->password ) {
            self::$alertas['error'][] = "La contraseña es obligatoria";
        }

        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = "La contraseña debe contener al menos 6 caracteres";
        }

        if(!$this->ficha_pago) {
            if(!isset($_FILES['ficha_pago']) || $_FILES['ficha_pago']['error'] !== UPLOAD_ERR_OK) {
                self::$alertas['error'][] = "La ficha de pago es obligatoria";
            }
        }

       


        return self::$alertas;
    }

    public function validarLogin() {
        if(!$this->email) {
            self::$alertas['error'][] = "El correo electrónico es obligatorio";
        }
        if(!$this->password) {
            self::$alertas['error'][] = "La contraseña es obligatoria";
        }

        return self::$alertas;
    }
    


    public function validarEmail() {
        if(!$this->email) {
            self::$alertas['error'][] = "El correo electrónico es obligatorio";
        }
        return self::$alertas;
    }

    public function validarPassword(){
        if(!$this->password){
            self::$alertas["error"][] = "La contraseña es obligatoria";
        }
        if(strlen($this->password) < 6){
            self::$alertas["error"][] = "La contraseña debe tener al menos 6 caracteres";
        }
        return self::$alertas;
    }


    // Revisar si el usuario existe
    public function existeUsuario() {
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";
        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = "El usuario ya esta registrado";
        }
       return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken() {
        $this->token = uniqid();
        // $this->token =  substr( md5(uniqid( rand(), true )), 0,10);
        }

    public function comprobarPasswordAndVerificado($password) {
        $resultado = password_verify($password, $this->password);
        
        if(!$resultado || !$this->confirmado){
            self::$alertas["error"][] = "Contraseña incorrecta o tu cuenta no ha sido confirmada";
        } else {
            return true;
        }
    }



     // Método para obtener todos los usuarios
     public static function obtenerTodos() {
        $query = "SELECT * FROM " . self::$tabla;
        $resultado = self::$db->query($query);

        $usuarios = [];
        while ($row = $resultado->fetch_assoc()) {
            $usuarios[] = new self($row);
        }

        return $usuarios;
    }


    public static function obtenerPorId($id) {
        $query = "SELECT * FROM " . self::$tabla . " WHERE id = " . self::$db->escape_string($id) . " LIMIT 1";
        $resultado = self::$db->query($query);
    
        if ($resultado->num_rows) {
            $usuario = $resultado->fetch_assoc();
            return new self($usuario);
        } else {
            return null; // O manejar el caso en que no se encuentre el usuario
        }
    }




}