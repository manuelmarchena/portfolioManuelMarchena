<?php 

$textoEncabezado = array (
    "idioma"=> "es",
    "saludo"=> "Hola! mi nombre es ",
    "identificacion"=> "Soy un desarrollador web Full-Stack.",
    "boton"=> "Algunos de mis trabajos",
);



if((substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))=="es"){

?>


<div class="encabezado" id="encabezado">
        <div class="header__div" id="headerDiv">
            <img src="" alt=""></img>
            <div class="header__text__box" id="headerrTextBox">
                <h1>
                   <?php echo $textoEncabezado['saludo']; ?> <span class="nombre">Manuel Marchena</span>.
                </h1>
                <p>
                <?php echo $textoEncabezado['identificacion']; ?>
                </p>
            </div>
            <div class="button" id="headerBoton">
                <p>
                <?php echo $textoEncabezado['boton']; ?>
                    <span class="iconify" data-icon="mdi:arrow-right"></span></p>
            </div>
        </div>
    </div>
<?php 
}
?>