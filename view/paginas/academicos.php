<?php

    if(isset($_GET['rol'])){

    }else{
        header("Location: ../error404");
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/pruebaIntegradora/html/css/paginas/academicos.css">
    <title>Cursos Academicos</title>
</head>
<body>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL HEADER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/headerGlobal.php'); ?>

<!--=======================================================================-->



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

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL FOOTER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/footerGlobal.php'); ?>

<!--=======================================================================-->

    <script src="../../html/js/slider.js"></script>
</body>
</html>