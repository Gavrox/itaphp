<!DOCTYPE html>
<head>
<title> Library </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Insert book to base</h1>
<p>Fill in all fields</p>
<div id="wrap">
	<div id="search">
	<img src="img/add.png" alt=""><br><br>
	<a href="index.php"><img src="img/search.png" height="50px" title="Search book" alt="add"></a>
	<a href="remove.php"><img src="img/remove.png" height="50px" title="Remove book" alt="Remove"></a>
	<br><br>
	<form action="#" method="post">
	<label>Book name<br>
		<input type="text" name="book"><br></label>
	<label>Author name<br>
		<input type="text" name="author"><br></label>
		<label>Year of publication<br>
		<input type="text" name="year"><br></label>
		<input type="submit" name="insert" value="Insert"><br>
	</form>
	</div>
	<div id="message">
		<?php
		if (isset($_POST['insert'])){
			if (isset($_POST['book']) && isset($_POST['author']) && isset($_POST['year'])){
				if (!empty($_POST['book']) && !empty($_POST['author']) && !empty($_POST['year'])){
					$book = trim($_POST['book']);
					$author = trim($_POST['author']);
					$year = trim($_POST['year']);
					require "conn.php";
					$book = mysqli_real_escape_string($conn, $book);
					$author = mysqli_real_escape_string($conn, $author);
					$year = mysqli_real_escape_string($conn, $year);
					$query = "INSERT INTO titles (book, author, year) VALUES  ('{$book}', '{$author}','{$year}')";
					if (mysqli_query($conn, $query)===TRUE){
						echo "New book succesfully added";
					}else{
						echo "Error!!!";
					}
					
				}else{
					echo "All fields must be filled in!";
				}
			}else{
				echo "All parameter must be sent";
			}
			
		}
		?>
	</div>
	
</div>
</body>
</html>