<?php

namespace Model;

class Usuario extends ActiveRecord{
    //Base de datos
    protected static $tabla = ['usuarios'];
    protected static $columDb = ['id','nombre','apellido','email','password','telefono','admin','confirmado','token'];

    public $id,$nombre,$apellido,$email,$password,$telefono,$admin,$confirmado,$token;

    //argumentos -> args
    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? null;
        $this->confirmado = $args['confirmado'] ?? null;
        $this->token = $args['token'] ?? '';
    }

    //Mensajes de validaciòn para la creación de cuentas
    public function validateNewAccount() {
        // tipo de mensaje / mensaje de errores
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre del cliente es obligatorio';
        }
        if(!$this->apellido){
            self::$alertas['error'][] = 'El apellido del cliente es obligatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'El email del cliente es obligatorio';
        }
        if(!$this->telefono){
            self::$alertas['error'][] = 'El telefono del cliente es obligatorio';
        }

        return self::$alertas;
    }
}