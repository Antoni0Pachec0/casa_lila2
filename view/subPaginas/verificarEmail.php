<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/casa_lila2/html/css/verificar_email.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cambiar Contraseña</title>
</head>
<body>
    
    <div class="container">
        <div class="form-box">

            <form action="" method="POST">
                <h2>Recuperar contraseña</h2>
                <h4>Ingresa Tu Email</h4>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="txtVerificarEmail" required>
                    <label>Email</label>
                </div>

                <button type="submit" class="btn" name="btnEnviarVCorreo">Enviar</button>
            </form>

        </div>
    </div>

    <?php
        if (isset($_POST['btnEnviarVCorreo'])) {
            if (!empty($_POST['txtVerificarEmail'])) {
        
                $para = $_POST['txtVerificarEmail'];
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

                </body>
                </html>
                ';
        
                $header = "MIME-Version: 1.0" . "\r\n";
                $header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                $header .= "From: antonio6pache6@gmail.com" . "\r\n";
        
                $mail = mail($para, $titulo, $mensaje, $header);

                if($mail){
                    echo "<h1> Se envió </h1>";
                }else{
                    echo "<h1> No se envió </h1>";
                }
                
            }
        }
        
    ?>

</body>
</html>