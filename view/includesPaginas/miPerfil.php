<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/pruebaIntegradora/html/css/includesPaginas/miPerfil.css">">
    <title>Área personal</title>
</head>

<body>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL FOOTER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/headerGlobal.php'); ?>

<!--=======================================================================-->


    <!--Contenido-->

    <main>
        <section class="izquierdo">
            <div class="img-perfil"></div>

            <p class="nombre">Nombre de Ejemplo</p>

            <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nemo rerum corporis
                ratione quis nobis.</p>

            <button id="editar_perfil">Editar perfil</button>
        </section>

        <section class="derecho">
            <div class="cursos">
                <h2>Tus cursos</h2>

                <div class="cursos_box">
                    <div>
                        <i class='bx bxs-folder'></i>
                        <a href="#">Curso de ejemplo</a>
                    </div>
                    <div>
                        <i class='bx bxs-folder'></i>
                        <a href="#">Curso de ejemplo</a>
                    </div>
                    <div>
                        <i class='bx bxs-folder'></i>
                        <a href="#">Curso de ejemplo</a>
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

    
</body>

</html>