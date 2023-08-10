<?php 

date_default_timezone_set('America/Mexico_City');

/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DE LA CONEXION PARA QUE SE PUEDA CONECTAR CON LOS MODELOS                          =
 * =====================================                                                                    =
 */
require_once "conexion.php";

/**======================================================================================================== */

class modelLogin{

/**======================================================================================================== */
    static public function mdlRegistro($tabla, $datosLoginRegistro){

        $stmt = conexion::conectar2()->prepare("INSERT INTO $tabla (token, nombre, apellidos, email, password) VALUES (:token, :nombre, :apellidos, :email, :password)");

        $stmt->bindParam(":token", $datosLoginRegistro["token"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datosLoginRegistro["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $datosLoginRegistro["apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosLoginRegistro["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosLoginRegistro["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r($stmt->errorInfo());
        }
    }

/**======================================================================================================== */

    static public function mdlIniciarSesion($tabla, $columna, $verificacionC){

        if($columna != null && $verificacionC != null){

            $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
            $stmt->bindParam(":".$columna, $verificacionC, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt -> fetch();
        }
    }

/**======================================================================================================== */

static public function mdlVerificarRegistro($tabla, $columna, $verificacionC){

    if($columna != null && $verificacionC != null){

        $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
        $stmt->bindParam(":".$columna, $verificacionC, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt -> fetch();
    }
}

/**======================================================================================================== */
static public function mdlValidarEmail($tabla, $datosValidarEmail, $enviado){

    if($enviado){
        $stmt = conexion::conectar2()->prepare("INSERT INTO $tabla (email, token, codigo) VALUES (:email, :token, :codigo)");

        $stmt->bindParam(":email", $datosValidarEmail["email"], PDO::PARAM_STR);
        $stmt->bindParam(":token", $datosValidarEmail["token"], PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $datosValidarEmail["codigo"], PDO::PARAM_STR);
    }
    if ($stmt->execute()) {
        return "ok";
    } else {
        print_r($stmt->errorInfo());
    }
}
/**======================================================================================================== */

static public function mdlVerificarCodigo($tabla, $columna, $verificacionC){

    if($columna != null && $verificacionC != null){

        $stmt = conexion::conectar2()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
        $stmt->bindParam(":".$columna, $verificacionC, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt -> fetch();
    }
}

/**======================================================================================================== */

static public function mdlCaducarCodigo($tabla, $columna2, $verificacionC2){

    $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY fecha DESC LIMIT 1;");
    $stmt->bindParam(":fecha", $columna2, PDO::PARAM_STR);

        $fecha = 
        $fecha_actual = date('Y-m-d H:m:s');
        $segundos = strtotime($fecha_actual) - strtotime($fecha);
        $minutos = $segundos/60;
    
        if($minutos > 5){
            echo '
                <script>

                if(window.history.replaceState){
                    
                window.history.replaceState(null, null, window.location.href);
                }

                </script>
                ';

                echo'<div class="alert alert-danger">El codigo se venció</div>';
                echo $columna2 . '<br>';
                echo $fecha_actual .'<br>';
                echo $segundos . '<br>';
                echo $minutos . '<br>';
        }else{

            $stmt->execute();

            return $stmt -> fetch();
        }

    }

/**======================================================================================================== */

static public function ctrRegistro(){

     if(isset($_POST["loginRegistroNombre"]) && isset($_POST["loginRegistroApellidos"]) && isset($_POST["loginRegistroEmail"]) && isset($_POST["loginRegistroPassword"])){

        if(preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_ ]+$/',$_POST["loginRegistroNombre"])){

            if(preg_match('/^[a-zA-z-ñÑáéíóúÁÉÍÓÚ_ ]+$/',$_POST["loginRegistroApellidos"])){

                if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][ñÑa-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginRegistroEmail"])){

                    if(preg_match('/^[0-9a-zA-Z_ñÑ][@.-_]+$/', $_POST["loginRegistroPassword"])){
                        //========AQUI VA TODO EL CODIGOO DEL CONTROLADOR========

                        $tabla = 'loginRegistro';

                        $token = md5($_POST["loginRegistroNombre"] . "+" . $_POST["loginRegistroApellidos"] . "+" . $_POST["loginRegistroEmail"] . "+" . $_POST["loginRegistroPassword"]);

                        $datosLoginRegistro = array ("token" => $token,
                                                "nombre" => $_POST["loginRegistroNombre"],
                                                "apellidos" => $_POST["loginRegistroApellidos"],
                                                "email" => $_POST["loginRegistroEmail"],
                                                "password" => $_POST["loginRegistroPassword"]);

                        $respuesta = modelLogin::mdlRegistro($tabla, $datosLoginRegistro);

                        return $respuesta;

                        //=======================================================
                    }else{

                        echo '<script> if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                        </script>';
                        
                        echo'<div class="alert alert-danger">Error en los acaracteres de la contraseña</div>';
                    }

                }else{

                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    
                    echo'<div class="alert alert-danger">Error en los caracteres del email</div>';
                
                }

            }else{

                echo '<script> if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                
                echo'<div class="alert alert-danger">Error en los caracteres del apellido</div>';
            }

        }else{

            echo '<script> if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
            </script>';
            
            echo'<div class="alert alert-danger">Error en los caractéres de nombre</div>';

        }

     }else{

        echo '<script> if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
            </script>';
            
            echo'<div class="alert alert-danger">Debes llenar todos los campos</div>';

     }
}

}
?>