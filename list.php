<!DOCTYPE HTML>
<html>
<head>
<title>PHP, PDO, Databases</title>
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
$films=getAllFilms();

foreach($films as $film){
    echo "<p>";
    echo "<a href='details.php?id=".$film['id']."'>";
    echo $film["title"];
    echo "</a>";
    echo "</p>";
}

?>
</body>
</html>