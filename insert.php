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
require_once("film-model.php");

//do some form validation
$title=$_POST['title'];
$year=$_POST['year'];
$duration=$_POST['duration'];

$success = insertFilm($title, $year, $duration);

if($success==1){
	echo "<p>Successfully added the details for ".$title."</p>";
}else{
	echo "<p>There was a problem inserting the data.</p>";
}
$conn=NULL;





?>


</body>
</html>