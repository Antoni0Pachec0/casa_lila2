<?php

class conexion{
    static public function conectar(){

        $servidor = 'localhost';
        $nombreDeLABaseDeDatos = 'pruebas';
        $nombreDelUsuario = 'root';

        $conectar = new PDO("mysql:host=$servidor;dbname=$nombreDeLABaseDeDatos", "$nombreDelUsuario", "");

        $conectar -> exec("set names utf8");

        return $conectar;
    }

    static public function conectar2(){

        $servidor = 'localhost';
        $nombreDeLABaseDeDatos = 'id21091387_cpruebal2';
        $nombreDelUsuario = 'id21091387_antonio';
        $contraseña = 'Antonio_14';
        
        $conectar2 = new PDO("mysql:host=$servidor;dbname=$nombreDeLABaseDeDatos", "$nombreDelUsuario", "$contraseña");

        $conectar2 -> exec("set names utf8");

        return $conectar2;
    }
}
?>