<?php
if (isset($_GET['id'])){
	$id=$_GET['id'];
	require "conn.php";
	$query = "DELETE FROM titles WHERE id = {$id}";
	mysqli_query($conn, $query);
	header("Location: remove.php");
}