
<?php
use \SimpleFilmApp\FilmController;
require_once("models/film-model.php");
require_once("controllers/filmcontroller.php");

$filmController=new FilmController();

if(isset($_GET["action"])){
    $action=$_GET['action'];
}else{
    $action="list";
}


if ($action==="list") {
	$filmController->listFilms();
} else if ($action==="details" && isset($_GET['id'])) {
	$filmController->details($_GET['id']);
} else {
    include("views/404-view.php");
}


?>
