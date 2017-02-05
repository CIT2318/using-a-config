
<?php
use FrontController\Config;

require_once("config.php");

Config::setConfig("config/config.php");

$database = Config::get("database");
$viewPath=Config::get("view-path");
echo $database["username"];
require_once("models/film-model.php");


if(isset($_GET["action"])){
    $action=$_GET['action'];
}else{
    $action="list";
}


if ($action==="list") {
	$films=getAllFilms();
	$pageTitle="List all films";
	include($viewPath."list-view.php");
} else if ($action==="details" && isset($_GET['id'])) {
	$film=getFilmById($_GET['id']);
	$pageTitle="Film details";
	include($viewPath."details-view.php");
} else {
    include($viewPath."404-view.php");
}


?>
