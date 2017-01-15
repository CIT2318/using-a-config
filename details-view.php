<!DOCTYPE HTML>
<html>
<head>
<title>Show Film Details</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
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