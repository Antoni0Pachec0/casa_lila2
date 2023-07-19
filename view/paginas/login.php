<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/casa_lila2/html/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

    <!--====================================================================================
    *Condiciones para abrir las variables GET mediante la URL se condiciona si la 
    *carpeta paginas es igual auna de las que tenemos se abra           #==:inicio.php==
    =====================================================================================-->

    <?php if(isset($_GET["Paginas"])): ?>
    <?php if($_GET["Paginas"] == "Inicio"): ?>
        <a href="Index.php?Pagina=Inicio">Home</a>
    <?php else: ?>
        <a href="Index.php?Pagina=Inicio">Home</a>
    <?php endif ?>

    <!--=================================================================-->

    <?php else: ?>

    <!--=================================================================-->

    <header class="header">
        <nav class="navbar">
            <a href="Index.php?Pagina=Inicio">Home</a>
            <a href="#">Nosotros</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>

<!--=================================================================-->

        <?php endif ?>
        
<!--=================================================================-->

<form action="#" class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>

    <div class="background"></div>

    <div class="container">
        <div id="difuser"></div>
        <div class="content">
            <h2 class="logo"><i class='bx bxl-xing'></i>Casa Lila</h2>

            <div class="text-sci">
                <h2>Bienvenido!<br><span>A nuestro sitio web!</span></h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nemo, eligendi tenetur fugiat quas similique?</p>

                <div class="social-icons">
                    <a href=""><i class='bx bxl-linkedin'></i></a>
                    <a href=""><i class='bx bxl-facebook'></i></a>
                    <a href=""><i class='bx bxl-instagram'></i></a>
                    <a href=""><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="">
                    <h2>Inicia sesión</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="contraseña" required>
                        <label>Contraseña</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox"> Recuerdame</label>
                        <a href="#">Olvidaste tu contraseña?</a>
                    </div>

                    <button type="submit" class="btn">Iniciar sesión</button>

                    <div class="login-register">
                        <p>No tiene una cuenta? <a href="#" class="register-link">Cree una</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="">
                    <h2>Registrate</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></i></span>
                        <input type="text" name="nombre" required>
                        <label>Nombre</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></i></span>
                        <input type="text" name="apellido" required>
                        <label>Apellidos</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="contraseña" required>
                        <label>Contraseña</label>
                    </div>

                    <button type="submit" class="btn" name="register">Registrarme</button>

                    <div class="login-register">
                        <p>Ya tiene una cuenta? <a href="#" class="login-link">Inicia sesión</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="http://localhost/casa_lila/html/js/login.js"></script>

    <?php

    $registro = controladorLogin::ctrRegistro();

    if($registro == "ok"){

        echo '
        <script>
  
          if(window.history.replaceState){
            
              window.history.replaceState(null, null, window.location.href);
          }
  
        </script>
        ';
  
        echo'<h1>El usuario se ha registrado exitosamente</h1>';
        }

    ?>

</body>
</html>