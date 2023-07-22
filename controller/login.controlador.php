<?php

class controladorLogin{

/**======================================================================================================== */
    static public function ctrRegistro(){

        if(isset($_POST["loginRegistroNombre"]) && isset($_POST["loginRegistroApellidos"]) && isset($_POST["loginRegistroEmail"]) && isset($_POST["loginRegistroPassword"])){

            if(preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_ ]+$/',$_POST["loginRegistroNombre"]) &&
                preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_ ]+$/',$_POST["loginRegistroApellidos"]) &&
                #Validacion para el correo ===    ESTO ES TODO LO QUE ACEPTARÁ EL INPUT DE CORREO
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][ñÑa-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginRegistroEmail"]) &&
                preg_match('/^[0-9a-zA-Z_ñÑ]+$/', $_POST["loginRegistroPassword"])){

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

/**======================================================================================================== */
    public function ctrIniciarSesion(){

        if(isset($_POST["loginSesionEmail"])  && isset($_POST["loginSesionPassword"])){

            $tabla = 'loginRegistro';

            //Asigamos el nombre de la columna que vamos a consultar
            $columna = "email";

            //Asignamos la variable post que vamos a verificar
            $verificacionC = $_POST["loginSesionEmail"];

            $respuesta = modelLogin::mdlIniciarSesion($tabla, $columna, $verificacionC);

            //Si me coinciden los datos 
            if (is_array($respuesta) && $respuesta["email"] == $_POST["loginSesionEmail"] && $respuesta["password"] == $_POST["loginSesionPassword"]){

                $_SESSION["usuarioIngresado"] = "ok";

                echo '
                <script>

                    if(window.history.replaceState){
                    
                        window.history.replaceState(null, null, window.location.href);
                    }

                    window.location = "index.php?pagina=inicio";

                </script>
                ';

            }else if($respuesta["email"] != $_POST["loginSesionEmail"]){
                echo '
                <script>

                if(window.history.replaceState){
                    
                 window.history.replaceState(null, null, window.location.href);
                }

                </script>
                ';

                echo'<div class="alert alert-danger">El Email no ha sido registrado</div>';

            }else{
                echo '
                <script>

                if(window.history.replaceState){
                    
                 window.history.replaceState(null, null, window.location.href);
                }

                </script>
                ';

                echo'<div class="alert alert-danger">La contraseña es incorrecta</div>';
            }
        }
     }

     
}