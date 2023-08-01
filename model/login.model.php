<?php 

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

    echo'<h1>LLEGA A LINEA 81 DE MDL</h1>';
    if (isset($columna) && isset($verificacionC)) {

        echo'<h1>LLEGA A LINEA 84 DE MDL</h1>';
        $stmt = conexion::conectar2()->prepare("SELECT * FROM :tabla WHERE :columna=:valor");
        echo'<h1>LLEGA A LINEA 86 DE MDL</h1>';
        
        var_dump($stmt);
        $stmt->bindParam(":tabla", $tabla, PDO::PARAM_STR);
        $stmt->bindParam(":columna", $columna, PDO::PARAM_STR);
        $stmt->bindParam(":valor", $verificacionC, PDO::PARAM_STR);
        var_dump($stmt);
        echo'<h1>LLEGA A LINEA 91 DE MDL</h1>';


        echo'<h1>LLEGA A LINEA 94 DE MDL</h1>';
        $stmt->execute();
        echo'<h1>LLEGA A LINEA 96 DE MDL</h1>';

        return $stmt->fetch();

        echo'<h1>LLEGA A LINEA 100 DE MDL</h1>';
        
    }
}

/**======================================================================================================== */

}
?>