<?php

date_default_timezone_set('America/Mexico_City');

class controladorLogin{

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

                $_SESSION["usuarioIngresado"] = true;

                if($respuesta['cargo'] == 1){


                    $usuario = 'ad';
                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    
                    window.location = "http://localhost/pruebaIntegradora/index.php?pagina=academicos&rol=' . $usuario . '";
                    
                    </script>';
                }else if($respuesta['cargo'] == 2){

                    
                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    
                    window.location = "http://localhost/pruebaIntegradora/index.php?pagina=academicos";
                    
                    </script>';
                }
//===================================================================================
//CAMBIARA LA DIRECCION DEL WINDOW LOCATION, AL NOMBRE DE LA CARPETA DE CASALILA2 

                echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    
                    window.location = "https://cpruebal.000webhostapp.com/";
                    
                    </script>';

            }else if($respuesta["email"] != $_POST["loginSesionEmail"]){

                echo '<script> if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';

                echo'<div class="alert alert-danger">El email NO ha sido registrado</div>';

            }else{

                echo '<script> if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                
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
                $mensaje = '
                <html>
                <head>
                    <title>Este es el titulo de html</title>
                </head>
                    <body>
                        <header width="100%" height="10px" background="#AF7AC5">
                            <h1><i>Codigo de verificacion</i></h1>
                        </header>
                    <hr> <br>';

                if($_GET["subPagina"] == "verificarCodigo") {
                    $mensaje .= '<a href="index.php?subPagina=verificarCodigo"></a>';
                }

                $mensaje .= '
                <h2><b>El código es: </b></h2>
                        <h3>' . $codigo . '</h3>
                    <a href="https://cpruebal2.000webhostapp.com/index.php?subPagina=verificarCodigo&email=' . $para . '&token=' . $token . '">Ingresa el codigo</a>
                </body>
                </html>';

                $header = "MIME-Version: 1.0" . "\r\n";
                $header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                $header .= "From: pruebaCasaLila@exaple.com" . "\r\n";

                $enviado = false;
                $mail = mail($para, $titulo, $mensaje, $header);



                if($mail){
                    $enviado = true;

                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    
                    echo'<div class="alert alert-success">Verifique Su Email</div>';

                }else{

                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    
                    echo'<div class="alert alert-success">No se pudo enviar</div>';
                }

                $tabla = 'verificarPassword';

                $datosValidarEmail = array ("email" => $_POST["txtValidarEmail"],
                                            "token" => $token,
                                            "codigo" => $codigo);

                $respuesta = modelLogin::mdlValidarEmail($tabla, $datosValidarEmail, $enviado);

            return $respuesta;
            }else if($respuesta["email"] != $_POST["txtValidarEmail"]){

                echo '<script> if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                
                echo'<div class="alert alert-danger">El Email no ha sido registrado</div>';

            }
        }
        
        }
    }//llave metodo
/**======================================================================================================== */

static public function ctrValidarCodigo(){
    if(isset($_POST['txtVerificarCodigo']) && preg_match('/^[0-9]+$/', $_POST["txtVerificarCodigo"])){

        $tabla = 'verificarPassword';
        $columna = "codigo";
        $verificacionC = $_POST["txtVerificarCodigo"];

            $respuesta = modelLogin::mdlVerificarCodigo($tabla, $columna, $verificacionC);

            if (is_array($respuesta) && $respuesta["codigo"] == $_POST["txtVerificarCodigo"] && $respuesta['email'] == $_POST["txtVerificarEmail"] && $respuesta['token'] == $_POST["txtVerificarToken"]){
                
                $email = $_POST["txtVerificarEmail"];
                $token = $_POST["txtVerificarToken"];

                $fecha = ($respuesta['fecha']);
                $fecha_actual = date('Y-m-d H:m:s');
                $segundos = strtotime($fecha_actual) - strtotime($fecha);
                $minutos = $segundos/60;

                echo $fecha . '<br>';
                echo $fecha_actual . '<br>';
                echo $segundos . '<br>';
                echo $minutos . '<br>';

                if($minutos > -293.557){

                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    
                    echo'<div class="alert alert-danger">El código ya caducó</div>';

                }else{

                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?subPagina=cambiarContraseña&email=' . $email . '&token=' . $token .'";

                </script>';

                }

            }else{
                    echo '<h1>No existe el codigo</h1>';
                }
            }else{
                echo '<script> if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                
                echo'<div class="alert alert-danger">Los datos ingresados no son aceptados</div>';
            
            }
}//llave metodo

/**======================================================================================================== */

static public function ctrCambiarContraseña(){
    if(isset($_POST['txtCambiarContraseña1'])){

        if(preg_match('/^[0-9a-zA-Z_ñÑ][@.-_]+$/', $_POST["txtCambiarContraseña1"])){

            if(isset($_POST['txtCambiarContraseña2'])){

                if(preg_match('/^[0-9a-zA-Z_ñÑ][@.-_]+$/', $_POST["txtCambiarContraseña2"])){
                    //========AQUI VA TODO EL CODIGOO DEL CONTROLADOR========


                    //=======================================================
                }else{
                    echo '<script> if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    
                    echo'<div class="alert alert-danger">Caracteres no aceptados en el segundo campo</div>';        
                }

            }else{
                echo '<script> if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                
                echo'<div class="alert alert-danger">Debes ingresar la contraseña en el segundo campo</div>';
            
            }

        }else{
            echo '<script> if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
            </script>';
            
            echo'<div class="alert alert-danger">Caracteres no aceptados en el primer campo</div>';
        }

    }else{
        echo '<script> if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
        </script>';
        
        echo'<div class="alert alert-danger">Debes ingresar la contraseña en el primer campo</div>';
    }
}


}//llave clase