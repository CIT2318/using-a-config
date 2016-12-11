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
try{
       $conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
$query = "SELECT * FROM films";
$resultset = $conn->query($query);

while ($film = $resultset->fetch()) {
    echo "<p>";
    echo "<a href='details.php?id=".$film['id']."'>";
    echo $film["title"];
    echo "</a>";
    echo "</p>";
}

?>
</body>
</html>