<?php

class controladorLogin{

    static public function ctrIniciarSesion(){

        if(isset($_POST["loginEmail"]) && isset($_POST["loginPassword"])){


            $tabla = 'loginIniciarSesion';

            $datosLogin = array ("email" => $_POST["loginEmail"],
                                    "password" => $_POST["loginPassword"]);

            $respuesta = modelLogin::mdlIniciarSesion($tabla, $datosLogin);
        }
    }

    static public function ctrRegistro(){

        if(isset($_POST["loginRegistroNombre"]) && isset($_POST["loginRegistroApellidos"]) && isset($_POST["loginRegistroEmail"]) && isset($_POST["loginRegistroPassword"])){

            if(preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_ ]+$/',$_POST["loginRegistroNombre"]) &&
                preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_ ]+$/',$_POST["loginRegistroApellidos"]) &&
                #Validacion para el correo ===    ESTO ES TODO LO QUE ACEPTARÁ EL INPUT DE CORREO
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][ñÑa-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginRegistroEmail"]) &&
                preg_match('/^[0-9a-zA-Z_ñÑ]+([.])$/', $_POST["loginRegistroPassword"])){

            $tabla = 'loginRegistro';

            $token = md5($_POST["loginRegistroNombre"] . "+" . $_POST["loginRegistroApellidos"] . "+" . $_POST["loginRegistroEmail"] . "+" . $_POST["loginRegistroPassword"]);

            $datosLoginRegistro = array ("token" => $token,
                                    "nombre" => $_POST["loginRegistroNombre"],
                                    "apellidos" => $_POST["loginRegistroApellidos"],
                                    "email" => $_POST["loginRegistroEmail"],
                                    "password" => $_POST["loginRegistroPassword"]);

            $respuesta = modelLogin::mdlRegistro($tabla, $datosLoginRegistro);

            return $respuesta;
                }else{
                    $respuesta = "error";

                    return $respuesta;
            }
        }
    }
}