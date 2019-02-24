<?php
require "conn.php";
if (isset($_GET['criteria'])){
	if(!empty($_GET['criteria'])){
		$criteria=trim($_GET['criteria']);
		$criteria = mysqli_real_escape_string($conn, $criteria);
		$query = "SELECT * FROM titles WHERE book LIKE '%{$criteria}%' OR author LIKE '%{$criteria}%'";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)){
			?>
			<div id="result">
				<img src="img/onebook.png" alt="book">
				<p><b>Title:</b><?php echo $row['book']?></p>
				<p><b>Author:</b><?php echo $row['author']?></p>
				<p><b>Year:</b><?php echo $row['year']?></p>
			</div>
			<?php
		}
		echo "Number of books: " . mysqli_num_rows($result);	
		} else {
			echo "No result";
		}
			
			} else {
		echo "Criteria is empty!";
	
	}
}
?>