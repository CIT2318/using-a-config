
<?php
require_once("film-model.php");
$filmId=$_GET['id'];
$film=getFilmById($filmId);
$title="Film details";
include("views/list-view.php");
?>