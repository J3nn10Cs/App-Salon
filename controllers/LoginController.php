<?php

    namespace Controllers;

    use Model\Usuario;
    use MVC\Router;

    class LoginController{
        public static function login(Router $router){
            $router -> render('auth/login');
        }

        public static function logout(){
            echo "Desde logout";
        }

        public static function olvide(Router $router){
            $router -> render('/auth/olvide-password', [
                
            ]);
        }

        public static function recuperar(){
            echo "Desde recuperar";
        }

        public static function crear(Router $router){
            
            //Instaciamos el usuario
            $usuario = new Usuario();
            //creando las alertas en un array
            $alertas = [];

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                //sincroniza el objeto vacio con los nuevos datos que hay
                $usuario -> sincronizar($_POST);
                //Cuando se envien datos vacios
                $alertas = $usuario -> validateNewAccount();
                //Revisar que alertas esten vacias
                if(empty($alertas)){
                    //Verificar que el usuario no esté registrado
                    $usuario -> userexists();
                }
            }

            $router -> render('/auth/crear-cuenta', [
                'usuario' => $usuario,
                'alertas' => $alertas
            ]);
        }
    }
