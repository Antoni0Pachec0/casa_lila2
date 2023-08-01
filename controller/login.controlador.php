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
    }//llave metodo

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
//===================================================================================
//CAMBIARA LA DIRECCION DEL WINDOW LOCATION, AL NOMBRE DE LA CARPETA DE CASALILA2 
                echo '
                <script>

                    if(window.history.replaceState){
                    
                        window.history.replaceState(null, null, window.location.href);
                    }

                    window.location = "https://cpruebal.000webhostapp.com/";

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

                echo'<div class="alert alert-danger">El email NO ha sido registrado</div>';

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
     }//llave metodo

/**======================================================================================================== */

    static public function ctrValidarEmail(){
    if(isset($_POST['btnValidarEmail'])){
        if(isset($_POST['txtValidarEmail'])){

            $tabla = 'loginRegistro';

            //Asigamos el nombre de la columna que vamos a consultar
            $columna = "email";

            //Asignamos la variable post que vamos a verificar
            $verificacionC = $_POST["txtValidarEmail"];

            $respuesta = modelLogin::mdlVerificarRegistro($tabla, $columna, $verificacionC);

            //Si me coinciden los datos 
            if (is_array($respuesta) && $respuesta["email"] == $_POST["txtValidarEmail"]){

                $token = uniqid();
            
                $para = $_POST['txtValidarEmail'];
                $titulo = 'Restablecer contraseña - Casa Lila';
                $codigo = rand(1000, 9999);
                $mensaje =
                '
                <html>
                <head>
                    <title>Este es el titulo de html</title>
                </head>

                <body>
                    <header width="100%" height="10px" background="#AF7AC5">
                        <h1><i>Codigo de verificacion</i></h1>
                    </header>
                    <hr> <br>

                    <h2><b>El código es: </b></h2>
                    <h3>' . $codigo . '</h3>
                    <a href="https://cpruebal2.000webhostapp.com/view/subPaginas/verificarCodigo.php?email=' . $para . '&token=' . $token . '">Ingresa el codigo</a>
                    
                </body>
                </html>
                ';
        
                $header = "MIME-Version: 1.0" . "\r\n";
                $header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                $header .= "From: pruebaCasaLila@exaple.com" . "\r\n";
        
                $enviado = false;
                $mail = mail($para, $titulo, $mensaje, $header);



                if($mail){
                    $enviado = true;
                    echo '
                    <script>
    
                    if(window.history.replaceState){
                        
                     window.history.replaceState(null, null, window.location.href);
                    }
    
                    </script>
                    ';
    
                    echo'<div class="alert alert-success">Verifique Su Email</div>';
                }else{
                    echo "<h1> No se envió </h1>";
                }

                $tabla = 'verificarPassword';

                $datosValidarEmail = array ("email" => $_POST["txtValidarEmail"],
                                            "token" => $token,
                                            "codigo" => $codigo);

                $respuesta = modelLogin::mdlValidarEmail($tabla, $datosValidarEmail, $enviado);

            return $respuesta;
            }else if($respuesta["email"] != $_POST["txtValidarEmail"]){
                echo '
                <script>

                if(window.history.replaceState){
                    
                 window.history.replaceState(null, null, window.location.href);
                }

                </script>
                ';

                echo'<div class="alert alert-danger">El Email no ha sido registrado</div>';
            }
        }
        
        }
    }//llave metodo
/**======================================================================================================== */

static public function ctrValidarCodigo(){
    echo'<h1>LLEGA A LINEA 204 INICIO DEL CONTROLADOR DE CTR</h1>';
    if(isset($_POST['txtVerificarCodigo'])){

        echo'<h1>LLEGA A LINEA 206 DE CTR</h1>';

        $tabla = 'loginRegistro';
        $columna = "verificarPassword";
        $verificacionC = $_POST["txtVerificarCodigo"];

        var_dump($tabla);
        var_dump($columna);
        var_dump($verificacionC);

            echo'<h1>LLEGA A LINEA 212 DE CTR</h1>';
            include("../model/login.model.php");
            require_once("../model/login.model.php");
            $respuesta = modelLogin::mdlVerificarCodigo($tabla, $columna, $verificacionC);
            var_dump($respuesta);
            echo'<h1>LLEGA A LINEA 214 DE CTR</h1>';

            if (is_array($respuesta) && $respuesta["codigo"] == $_POST["txtVerificarCodigo"]){

                var_dump($respuesta);

                echo'<h1>LLEGA A LINEA 218 DE CTR</h1>';
                header('Location: cambiarContraseña.php');
                exit;

                echo'<h1>LLEGA A LINEA 222 DE CTR</h1>';
            }
            
            }
}//llave metodo

/**======================================================================================================== */




}//llave clase