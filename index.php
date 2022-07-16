
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!-- <script defer src="js/main.js"></script> -->
</head>
<body>
<?php
    #-- Header
    include "modulos/header.php";
    #-- Barra de Navigación
    include "modulos/navBar.php";
    #-- About me
    include "modulos/aboutMe.php";
    #-- Habilidades
?>
<section>
    <div class="skills" id="skills">
        <h2>
            Habilidades
        </h2>
    </div>
    <div>
        <ul class="skills" id="skillsDesc">
<?php
    include "modulos/softSkills.php";
?>
        </ul>
    </div>
</section>
<?php
    #--portfolio
?>
<section>
        <div class="portfolio" id="portfolio">
            <div class="titulo__port" id="tituloPort">
                <h2>Portafolio</h2>
            </div>
            <div class="filtro" id="filtro">
                <ul class="lista__filtro" id="listaFiltro">
<?php
    #-- Filtro
    include "modulos/filtro.php";
?>
                </ul>
            </div>
            <div class="contenerdor__cards" id="contenedorCards">
<?php
    #-- Tarjetas
    include "modulos/cards.php";
?>
            </div>
        </div>
    </section
<?php 
    #--Footer
    include "modulos/footer.php";
?>

</body>
</html>