<?php
    if(isset($_GET['email']) && isset($_GET['token'])){
        $email = $_GET['email'];
        $token = $_GET['token'];
    }else{
        header("Location: error404.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
</head>
<body>

    <div class="logreg-box">
        <div class="form-box login">

            <form action="" method="POST">
                <h2>Ingresa Codigo de verificacion</h2>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="number" name="txtVerificarCodigo" required>
                    <label>Codigo: </label>

                    <input type="hidden" readonly name="txtVerificarEmail" value="<?php echo htmlspecialchars($email); ?>">
                    <input type="hidden" readonly name="txtVerificarToken" value="<?php echo htmlspecialchars($token); ?>">

                </div>

                <button type="submit" class="btn" name="btnEnviarCodigo">Enviar</button>

                <?php
                echo'<h1>LLEGA A LINEA 38 DE VC</h1>';

                var_dump($_POST['btnEnviarCodigo']);

                if(isset($_POST['btnEnviarCodigo'])){
                    echo'<h1>LLEGA A LINEA 40 DE VC</h1>';

                    include("../../controller/login.controlador.php");
                    $c = new controladorLogin();
                    $c -> ctrValidarCodigo();

                    $co2 = controladorLogin::ctrValidarCodigo();


                    var_dump($codigo);
                    var_dump($co2);

                    echo'<h1>LLEGA A LINEA 46 DE VC</h1>';
                }
                
                ?>
            </form>

        </div>
    </div>
    
</body>
</html>