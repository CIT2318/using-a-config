<!DOCTYPE HTML>
<html>
<head>
<title>Show All Films</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
foreach ($films as $film) {
    echo "<p>";
    echo "<a href='details.php?id=".$film['id']."'>";
    echo $film["title"];
    echo "</a>";
    echo "</p>";
}

?>
</body>
</html>