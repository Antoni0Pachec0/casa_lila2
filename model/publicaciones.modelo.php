<?php

$contenido = $_POST['contenido'];

$link = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

$stmnt = $link->prepare("INSERT INTO publicaciones(contenido) VALUES (:contenido)");

$stmnt->execute(["contenido" => $contenido]);
