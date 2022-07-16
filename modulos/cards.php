<?php

$cards = array(
    "titulo" => "Titulo",
    "subtitulo" => "Subtitulo",
    "desc" => "Desc",
    "link"=> "Link",
    "otroLink"=> "Otro Link"
);
?>
 <div class="card">
    <div class="card-body"></div>
        <h5 class="card-title"><?php echo $cards["titulo"];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $cards["subtitulo"];?></h6>
        <p class="card-text"><?php echo $cards["desc"];?></p>
        <a href="#" class="card-link"><?php echo $cards["link"];?></a>
        <a href="#" class="card-link"><?php echo $cards["otroLink"];?></a>
    </div>
</div>