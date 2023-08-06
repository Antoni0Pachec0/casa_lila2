<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/casa_lila2/html/css/academicos.css">
    <title>Cursos Academicos</title>
</head>
<body>
    <!--Barra de navegacion-->
    <header class="header">

        <form action="#" class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>

        <div class="logo"></div>

<!--====================================================================================
*Condiciones para abrir las variables GET mediante la URL se condiciona si la 
*carpeta paginas es igual auna de las que tenemos se abra           #==:inicio.php==
=====================================================================================-->

    <?php if(isset($_GET["Paginas"])): ?>

    <?php if($_GET["Paginas"] == "inicio"): ?>
        <a href="index.php?Pagina=inicio">Inicio</a>
    <?php else: ?>
        <a href="index.php?Pagina=inicio">Inicio</a>
    <?php endif ?>

<!--=================================================================-->

    <?php if($_GET["Paginas"] == "login"): ?>
        <a href="index.php?Pagina=login">Iniciar Sesison</a>
    <?php else: ?>
        <a href="index.php?Pagina=login">Iniciar Sesion</a>
    <?php endif ?>

<!--=================================================================-->

    <?php else: ?>

<!--=================================================================-->

    <nav class="navbar">
        <a href="index.php?Pagina=inicio">Inicio</a>
    </nav>

<!--=================================================================-->

    <?php endif ?>

<!--=================================================================-->
    
        <div class="opciones-perfil">
            <label for="btn-perfil" class="perfil"><i class='bx bxs-user-circle' ></i></label>
            <input type="checkbox" id="btn-perfil">
            <div class="opciones">
                <nav>
                    <div class="opcion">
                        <i class='bx bxs-user'></i>
                        <a href="">Mi perfil</a>
                    </div>

                    <div class="opcion">
                        <i class='bx bxs-folder-open'></i>
                        <a href="">Mis cursos</a>
                    </div>

                    <div class="opcion">
                        <i class='bx bx-log-out' ></i>
                        <a href="">Cerrar sesión</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <!--Contenido-->

    <main class="contenido">
        <section class="superior">
            <div class="text">
                <h2>Cursos culturales</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ab, perspiciatis magni sapiente vero consequuntur!</p>
            </div>

            <div class="img"></div>

            <div class="difuser"></div>
        </section>

        <section class="medio">

            <div class="cursos-box">

                <div class="curso">
                    <div class="img"></div>
                    <div class="info">
                        <a href="">Curso de ejemplo</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae reprehenderit temporibus aliquid quaerat obcaecati facere.</p>
                    </div>
                </div>

                <div class="curso">
                    <div class="img"></div>
                    <div class="info">
                        <a href="">Curso de ejemplo</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae reprehenderit temporibus aliquid quaerat obcaecati facere.</p>
                    </div>
                </div>

                <div class="curso">
                    <div class="img"></div>
                    <div class="info">
                        <a href="">Curso de ejemplo</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae reprehenderit temporibus aliquid quaerat obcaecati facere.</p>
                    </div>
                </div>
                
            </div>
        </section>
    </main>


    <!--Footer-->

    <footer class="footer">
        <div class="contacto">
            <ul>
                <li><h2>Contacto</h2></li>
                <li>
                    <div class="c_electronico">
                        <label for="">Correo Electronico</label><br>
                        <a href="#">correoelectronico@gmail.com</a>
                    </div>
                </li>

                <li>
                    <div class="direccion">
                        <label for="">Direccion</label>
                        <p>Direccion de ejemplo</p>
                    </div>
                </li>

                <li>
                    <div class="sociales">
                        <a href=""><i class='bx bxl-facebook-circle'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-twitter' ></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </footer>

    <script src="http://localhost/casa_lila/html/js/slider.js"></script>
</body>
</html>