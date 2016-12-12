<?php
require_once("film-model.php");
$films=getAllFilms();
$pageTitle="Delete films";
include("views/delete-form-view.php");
?>