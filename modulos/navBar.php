<?php 
$textosBarra = array(
"idioma"=> "es",
"uno"=> "Sobre mi",
"dos"=> "Habilidades",
"tres"=> "Portafolio",
"cuatro"=> "Blog",
"cinco"=> "Contacto");

if((substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))=="es"){

}
?>
<nav class="navbar-dark bg-dark navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">M</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="barNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $textosBarra['uno'];?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
