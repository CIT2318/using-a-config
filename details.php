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
try{
       $conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}


$filmId=$_GET['id'];


$stmt = $conn->prepare("SELECT * FROM films WHERE films.id = :id");
$stmt->bindValue(':id',$filmId);
$stmt->execute();

if($film=$stmt->fetch()){
	echo "<h1>".$film['title']."</h1>";
	echo "<ul>";
	echo "<li>Year: ".$film['year']."</li>";
	echo "<li>Duration: ".$film['duration']."</li>";
	echo "</ul>";
}

?>
</body>
</html>