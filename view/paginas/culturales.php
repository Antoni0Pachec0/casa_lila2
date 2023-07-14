<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/casa_lila/html/css/culturales.css">
    <title>Cursos Culturales</title>
</head>
<body>
    <main class="container">
        <!--Barra de navegacion-->
        <header class="header">
            <label for="btn_menu" class="menu"><i class='bx bx-menu' ></i></label>

            <form action="#" class="search-bar">
                <input type="text" placeholder="Buscar...">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>

            <div class="logo"></div>

<!--====================================================================================
*Condiciones para abrir las variables GET mediante la URL se condiciona si la 
*carpeta paginas es igual auna de las que tenemos se abra           #==:inicio.php==
=====================================================================================-->

        <?php if(isset($_GET["paginas"])):?>

        <?php if($_GET["paginas"] == "login"): ?>
            <a href="index.php?pagina=login">Inicia Sesion</a>
        <?php else: ?>
            <a href="index.php?pagina=login">Inicia Sesion</a>
        <?php endif ?>

<!--=================================================================-->

        <?php if($_GET["paginas"] == "Inicio"): ?>
            <a href="index.php?pagina=Inicio">Inicio</a>
        <?php else: ?>
            <a href="index.php?pagina=Inicio">Inicio</a>
        <?php endif ?>

<!--=================================================================-->

        <?php else: ?>

<!--=================================================================-->

            <nav class="navbar">
                <a href="index.php?pagina=inicio">Inicio</a>
                <a href="index.php?pagina=login">Inicia sesion</a>
            </nav>

<!--=================================================================-->

        <?php endif ?>
    
<!--=================================================================-->
       

            <a href="" class="perfil"><i class='bx bxs-user-circle' ></i></a>
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

        <!--Contenido Central-->

        <section class="superior">
            <div class="info">
                <h1>Cursos Culturales</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vel tempora, mollitia ut error cum tenetur nisi obcaecati voluptate alias.</p>
            </div>

            <div class="img-gradient">
                <img src="https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_1da0673f82eccc3c9d222237dec40e36bf10eef3.1920x1080.jpg?t=1683059745" alt="">
            </div>
        </section>

        <section class="medio">

            <ul class="lista-superior">
                <li>
                    <div class="cursos">
                        <img src="https://www.superprof.mx/blog/wp-content/uploads/2018/09/tomar-clases-canto.png" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Canto</h3>
                    </div>
                </li>
                <li>
                    <div class="cursos">
                        <img src="https://www.superprof.mx/blog/wp-content/uploads/2016/07/como-tocar-guitarra-980x654.jpg" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Guitarra</h3>
                    </div>
                </li>
                <li>
                    <div class="cursos">
                        <img src="https://infolibros.org/wp-content/uploads/2021/09/Libros-para-aprender-a-tocar-Bateria.jpg" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Bateria</h3>
                    </div>
                </li>
                <li>
                    <div class="cursos">
                        <img src="https://www.musicalhow.com/wp-content/uploads/Pianist-Hand-Sizes.jpg" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Piano</h3>
                    </div>
                </li>
            </ul>

            <ul class="lista-inferior">
                <li>
                    <div class="cursos">
                        <img src="https://www.que-leer.com/wp-content/uploads/2018/03/dia-mundial-del-teatro-que-leer-revista.jpg" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Teatro</h3>
                    </div>
                </li>
                <li>
                    <div class="cursos">
                        <img src="https://www.elsoldesanluis.com.mx/incoming/afw70z-danza-folclorica.jpg/ALTERNATES/LANDSCAPE_960/Danza%20Folclorica.jpg" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Danza</h3>
                    </div>
                </li>
                <li>
                    <div class="cursos">
                        <img src="https://academianacionaldemusica.cl/pluginfile.php/514/course/overviewfiles/bajo_electrico.jpg" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Bajo</h3>
                    </div>
                </li>
                <li>
                    <div class="cursos">
                        <img src="https://saposyprincesas.elmundo.es/wp-content/uploads/2021/01/manualidades-papel-780x450.jpg" alt="">
                        <a href=""><i class='bx bxs-piano'></i></a>
                        <h3>Manualidades</h3>
                    </div>
                </li>
            </ul> 
        </section>

        <section class="inferior">
            <div class="slider">
                <div class="list">
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/133/969/139/artwork-nature-landscape-fantasy-art-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/30/586/460/artwork-fantasy-art-digital-art-forest-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/990/547/605/digital-art-futuristic-city-car-artwork-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/760/955/638/artwork-landscape-sky-mountains-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/626/913/146/cyberpunk-skyscraper-upside-down-animated-movies-wallpaper-preview.jpg">
                    </div>
                </div>
        
                <!--Botones prev y next-->
        
                <div class="buttons">
                    <button id="prev"><</button>
                    <button id="next">></button>
                </div>
        
                <!--Dots o puntos... (if 5 items => 5 dots)-->
        
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="informacion">
                <h2>Informacion</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsa nemo eius distinctio accusamus, fugiat ad, amet natus voluptatibus dolore aliquam repellendus eveniet reprehenderit excepturi maiores cum. Dicta, vero commodi?</p>
            </div>
        </section>

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

    </main>

    <script src="http://localhost/casa_lila/html/js/slider.js"></script>
</body>
</html>