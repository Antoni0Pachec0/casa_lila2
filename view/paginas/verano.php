<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/casa_lila2/html/css/verano.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cursos de Verano</title>
</head>
<body>

    <!--Barra de navegacion-->
    <header class="header">
        <!--Menú-->
        <label for="btn_menu" class="menu"><i class='bx bx-menu'></i></label>

        <!--Barra de busqueda-->
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
        <a href="index.php?pagina=login">Inicia sesion</a>
    </nav>

<!--=================================================================-->

    <?php endif ?>

<!--=================================================================-->

    <!--Icono perfil y opciones desplegables-->
    <div class="opciones-perfil">
            <label for="btn-perfil" class="perfil"><i class='bx bxs-user-circle'></i></label>
            <input type="checkbox" id="btn-perfil">

            <!--Opciones-->
            <div class="opciones">
                <nav>
                    <a href="">Perfil</a>
                    <a href="">Mis cursos</a>
                    <a href="">Cerrar sesión</a>
                </nav>
            </div>
        </div>
    </header>

    <!--Menu lateral-->
    <input type="checkbox" id="btn_menu">
    <div class="container_menu">
        <div class="cont_menu">
            <nav>
                <a href="#">Opciones</a>
                <a href="#">Opciones</a>
                <a href="#">Opciones</a>
                <a href="#">Opciones</a>
                <a href="#">Opciones</a>
                <a href="#">Opciones</a>
            </nav>
            <label for="btn_menu" class="icon_equis"><i class='bx bx-x'></i></label>
        </div>
    </div>

    <!--Central-->
    <main>
        <!--Seccion superior de bienvenida-->
        <section class="superior">
            <!--Fondo-->
            <div class="background"></div>

            <!--Informacion-->
            <div class="info">
                <h1>Cursos de Verano</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vel tempora, mollitia ut error cum
                    tenetur nisi obcaecati voluptate alias.</p>
            </div>

            <!--Imagen-->
            <div class="img"></div>
        </section>

        <!--Seccion media: texto e imagen grandes-->
        <section class="medio">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odit ipsa optio quae! Sint placeat
                    voluptatum delectus, a unde alias in reprehenderit voluptatibus magni illum quia voluptates saepe
                    suscipit expedita.</p>
            </div>

            <div id="imagen"></div>
        </section>

        <!--Seccion inferior: pestañas de informacion-->
        <section class="inferior">

            <!--Div que contiene todo-->
            <div class="info-cursos">

                <!--Div de las pestañas-->
                <div class="tab_box">
                    <button class="tab_btn active">Ludicos</button>
                    <button class="tab_btn">Culturales</button>
                    <button class="tab_btn">Academicos</button>
                    <button class="tab_btn">Eventos</button>

                    <!--Linea que se mueve-->
                    <div class="line"></div>
                </div>

                <!--Div del contenido-->
                <div class="content_box">

                    <!--Contenido 1-->
                    <div class="content active">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div> <!--Solo informacion-->
                                <h2>Ludicos</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c1" class="imgn"></div>
                        </div>
                    </div>

                    <!--Contenido 2-->
                    <div class="content">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div> <!--Solo informacion-->
                                <h2>Culturales</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c2" class="imgn"></div>
                        </div>
                    </div>

                    <!--Contenido 3-->
                    <div class="content">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div><!--Solo informacion-->
                                <h2>Academicos</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c3" class="imgn"></div>
                        </div>
                    </div>

                    <!--Contenido 4-->
                    <div class="content">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div><!--Solo informacion-->
                                <h2>Eventos</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c4" class="imgn"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Script de las pestañas-->

            <!--Cuando se selecciona una pestaña, se le agrega la clase 'active', y se le quita la misma clase a la pestaña
            seleccionada anteriormente con su respectivo contenido, todas las animaciones van para la clase 'active'-->
            <script>
                const tabs = document.querySelectorAll('.tab_btn');
                const all_content = document.querySelectorAll('.content');

                tabs.forEach((tab, index) => {
                    tab.addEventListener('click', (e) => {
                        tabs.forEach(tab => { tab.classList.remove('active') });
                        tab.classList.add('active');

                        var line = document.querySelector('.line');
                        line.style.width = e.target.offsetWidth + "px";
                        line.style.left = e.target.offsetLeft + "px";

                        all_content.forEach(content => { content.classList.remove('active') });
                        all_content[index].classList.add('active');
                    })
                })
            </script>
        </section>
    </main>

    <!--Footer-->

    <footer class="footer">
        <div class="contacto">
            <ul>
                <li>
                    <h2>Contacto</h2>
                </li>
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
                        <a href=""><i class='bx bxl-twitter'></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>