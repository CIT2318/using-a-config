<!DOCTYPE HTML>
<html>
<head>
<title>Film details</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
	<li><a href="list.php">View all films</a></li>
	<li><a href="insert-form.php">Add a new film</a></li>
	<li><a href="delete-form.php">Delete films</a></li>
</ul>
<?php
require_once("film-model.php");
$filmId=$_GET['id'];
$film=getFilmById($filmId);

if($film){
	echo "<h1>".$film['title']."</h1>";
	echo "<ul>";
	echo "<li>Year: ".$film['year']."</li>";
	echo "<li>Duration: ".$film['duration']."</li>";
	echo "</ul>";
}

?>
</body>
</html>