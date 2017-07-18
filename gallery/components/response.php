<?php

require_once ('../models/Gallery.php');

$user = new Gallery();
$films = Gallery::getPicturesjson();

    // Переводим массив в JSON
    echo json_encode($films);

?>