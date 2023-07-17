<?php

class conexion{
    static public function conectar(){

        $conectar = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");

        $conectar -> exec("set names utf8");

        return $conectar;
    }
}
?>