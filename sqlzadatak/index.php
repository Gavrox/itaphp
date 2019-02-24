<!DOCTYPE html>
<head>
<title> Library </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>E-Library</h1>
<p>Find book in base, it is enough just to type part of book title or author name. For all books just type space in search field</p>
<div id="wrap">
	<div id="search">
	<img src="img/search.png" alt="Search"><br><br>
	<a href="insert.php"><img src="img/add.png" height="50px" title="Add new book" alt="add"></a>
	<a href="remove.php"><img src="img/remove.png" height="50px" title="Remove book" alt="Remove"></a>
	<br><br>
	<form action="#" method="get">
		<input type="text" name="criteria" placeholder="Find a book"><br><br>
		<input type="submit" value="Search"><br>
	</form>
		
	</div>
	</div>
	<div class="res">
	<?php
	include "getResults.php";
	?>
</div>
</body>
</html>