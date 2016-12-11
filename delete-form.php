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
<h1>Delete Films</h1>
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

echo "<form action='delete.php' method='post'>";
while ($film = $resultset->fetch()) {
	echo "<p>";

    echo "<input type='checkbox' name='films[]' 
    id='film-".$film["id"]."' 
    value='".$film["id"]."'>";

    echo "<label for='film-".$film["id"]."'>".$film["title"]."</label>";
    echo "</p>";
}
echo "<input type='submit' name='submitBtn' value='delete these films'>";
echo "</form>";

?>


</body>
</html>