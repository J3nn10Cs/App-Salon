<?php
        $SERVER = "localhost";
        $DB = "";
        $USER = "root";
        $PASS = "";

        try{
            $db = new PDO("mysql:host=$SERVER;dbname=$DB",$USER,$PASS);
            $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo 'Conexión establecida';
        }catch(PDOException $e){
            echo 'No se pudo realizar la conexión' .$e->getMessage();
            exit;
        }
?>