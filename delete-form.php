<!DOCTYPE HTML>
<html>
<head>
	<title>Delete Films</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
    <li><a href="list.php">View all films</a></li>
    <li><a href="insert-form.php">Add a new film</a></li>
    <li><a href="delete-form.php">Delete films</a></li>
</ul>
<h1>Delete Films</h1>


<?php
require_once("film-model.php");
$films=getAllFilms();

echo "<form action='delete.php' method='post'>";
foreach ($films as $film) {
	echo "<p>";
    echo "<input type='checkbox' name='films[]' id='film-".$film["id"]."' value='".$film["id"]."'>";
    echo "<label for='film-".$film["id"]."'>".$film["title"]."</label>";
    echo "</p>";
}
echo "<input type='submit' name='submitBtn' value='delete these films'>";
echo "</form>";

?>


</body>
</html>