
<?php

require_once("models/film-model.php");
$films=getAllFilms();
$pageTitle="List all films";
include("views/list-view.php");

?>
