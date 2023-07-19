<?php 

/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DE LA CONEXION PARA QUE SE PUEDA CONECTAR CON LOS MODELOS                          =
 * =====================================                                                                    =
 */
require_once "conexion.php";

/**======================================================================================================== */

class modelLogin{
    static public function mdlIniciarSesion($tabla, $datosLogin){

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (email, password) VALUES (:nombre, :apellidos, :email, :password)");
    
        $stmt->bindParam(":nombre", $datosLogin["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $datosLogin["apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosLogin["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosLogin["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r($stmt->errorInfo());
        }
    
    }

    //FALTARIA EL DE APELLIDOS
    static public function mdlRegistro($tabla, $datosLoginRegistro){

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (token, nombre, apellidos, email, password) VALUES (:token, :nombre, :apellidos, :email, :password)");

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
}
?>