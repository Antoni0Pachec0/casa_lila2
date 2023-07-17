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

        if(isset($_POST["loginRegistroNombre"]) && isset($_POST["loginRegistroEmail"]) && isset($_POST["loginRegistroPassword"])){


            $tabla = 'loginRegistro';

            $datosLoginRegistro = array ("nombre" => $_POST["loginRegistroNombre"],
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


?>