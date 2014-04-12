<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listing</title>
</head>
<body>
	<?php
	if ($handle = opendir("./")) {
	    while (false !== ($entry = readdir($handle))) {

	        if ($entry != "." && $entry != ".." && $entry != "index.php" && $entry != ".htaccess") {
	            echo "<a href='$entry'>$entry</a><br />";
	        }
	    }
	    closedir($handle);
	}
	?>
</body>
</html>