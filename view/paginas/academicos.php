<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/casa_lila/html/css/academicos.css">
    <title>Cursos Academicos</title>
</head>
<body>
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

        <?php if($_GET["paginas"] == "inicio"): ?>
            <a href="index.php?pagina=inicio">Inicio</a>
        <?php else: ?>
            <a href="index.php?pagina=inicio">Inicio</a>
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

    <!--Contenido-->

    <main>
        <section id="intro">
            <div class="informacion">
                <h2>Cursos academicos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti deleniti impedit sequi dicta, ad aperiam!</p>
            </div>

            <img src="https://compass-ssl.xbox.com/assets/23/b6/23b6f32d-f359-43f3-a595-399cb019c603.jpg?n=DOOM-Eternal_GLP-Page-Hero-0_1083x609_02.jpg" alt="">
        </section>

        <section id="carrusel">
            <div class="slider">
                <div class="list">
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/133/969/139/artwork-nature-landscape-fantasy-art-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/30/586/460/artwork-fantasy-art-digital-art-forest-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://images3.alphacoders.com/102/thumb-1920-1025036.jpg">
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
        </section>

        <section id="info">
            <div class="izq">
                <h2>Informacion adicional</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repudiandae, at sit optio id neque. Dolorem ea culpa voluptatum quaerat nam. Ut architecto placeat quasi nostrum enim accusamus laudantium? Laborum.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quos eius, impedit rem rerum deleniti distinctio, nisi voluptas libero obcaecati saepe quidem provident, vel dolorum.</p>
                <img src="https://m.media-amazon.com/images/I/616igRPqlWL._AC_UF1000,1000_QL80_.jpg" alt="">
            </div>

            <div class="linea"></div>
            
            <div class="der">
                <img src="https://img.remediosdigitales.com/f217a9/forzahorizon5-05-16x9_wm_festivalrace/1366_2000.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda cumque perferendis nulla in cupiditate, ut dolorem obcaecati aperiam, eveniet dicta adipisci dolor quo ipsum accusamus, eaque nihil. Laborum ad odio sunt ducimus, eligendi voluptatum earum!</p>
                <img id="img2" src="https://img.remediosdigitales.com/0ceb5b/forza-horizon-5-mercedes-amg-one-1/1366_2000.jpeg" alt="">
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