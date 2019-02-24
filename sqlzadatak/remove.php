<!DOCTYPE html>
<head>
<title> Library </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Removing books from base</h1>
<p>Klik on icon <img src="img/remove.png" height="20px" alt="">next to book title you will remove book from base, so be carefull!</p>
<div id="wrap">
<div id="search">
	<img src="img/remove.png" alt=""><br><br>
	<a href="index.php"><img src="img/search.png" height="50px" title="Search book" alt="Search"></a>
	<a href="insert.php"><img src="img/add.png" height="50px" title="Add new book" alt="add"></a>
	<br><br>
	<?php
	require "conn.php";
		$query = "SELECT * FROM titles";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc($result)){
			?>
	</div>
</div>
<div class="res">
			<a href="removebook.php?id=<?php echo $row['id'] ?>"><img src="img/remove.png" alt="Remove"></a>
				<p><b>Title:</b><?php echo $row['book']?></p>
				<p><b>Author:</b><?php echo $row['author']?></p>
				<p><b>Year:</b><?php echo $row['year']?></p>
		
				<?php	
			}
		}else{
			echo "No books";
		}
		
		
		?>
	</div>

</body>
</html>