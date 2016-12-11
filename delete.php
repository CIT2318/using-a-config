<!DOCTYPE HTML>
<html>
<head>
	<title>PHP Databases and PDO</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head> 
<body>
<ul>
	<li><a href="list.php">View all films</a></li>
	<li><a href="insert-form.php">Add a new film</a></li>
	<li><a href="delete-form.php">Delete films</a></li>
</ul>
<h1>Delete Students</h1>
<?php
require_once("film-model.php");


try{
       $conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}


$filmIds=$_POST['films'];
$affected_rows = 0;
foreach($filmIds as $filmId)
{
	$affected_rows += deleteFilm($filmId);
}
echo "<p>Deleted ".$affected_rows." films</p>";


?>


</body>
</html>
