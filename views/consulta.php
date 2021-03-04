<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta tus datos</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <figure class="logo">
            <img src="views/img/logo.png" alt="">
        </figure>
        <a href="/consulta-datos-colsafe">Consulta tus datos</a>
    </header>
    <main class="container">

    <?php
        if(isset($_GET["ruta"])){
            //PROFESORES
            if($_GET["ruta"] == "resultConsult"){
                include "modules/result-consulta.php";               
            }
        }else{
            include "modules/form.php";
        }
    ?>
   
    </main>
    <footer>
        <span>
            © Colegio Santa Fe 2020. All Rights Reserved.
        </span>
    </footer>
</body>
</html>