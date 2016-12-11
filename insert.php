<!DOCTYPE HTML>
<html>
<head>
	<title>Add new student</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
	<li><a href="list.php">View all films</a></li>
	<li><a href="insert-form.php">Add a new film</a></li>
	<li><a href="delete-form.php">Delete films</a></li>
</ul>
<h1>Add new film</h1>

<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//do some form validation
$title=$_POST['title'];
$year=$_POST['year'];
$duration=$_POST['duration'];

$query="INSERT INTO films (id, title, year, duration)
VALUES (NULL, :title, :year, :duration)";
$stmt=$conn->prepare($query);
$stmt->bindValue(':title', $title);
$stmt->bindValue(':year', $year);
$stmt->bindValue(':duration', $duration);
$affected_rows = $stmt->execute();

if($affected_rows==1){
	echo "<p>Successfully added the details for ".$title."</p>";
}else{
	echo "<p>There was a problem inserting the data.</p>";
}
$conn=NULL;





?>


</body>
</html>