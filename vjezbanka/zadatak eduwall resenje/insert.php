<?php
	require "inc/connect_translation.php";
	if(isset($_POST["sr"], $_POST["en"], $_POST["submit"]))
	{
		$serbian = trim($_POST["sr"]);
		$english = trim($_POST["en"]);
		$serbian = mysqli_real_escape_string($mysqli, $serbian);
		$english = mysqli_real_escape_string($mysqli, $english);
		
		if(!preg_match("/^[a-zA-Z]{1,30}$/", $serbian)){
			echo "<p style='color: #FF0000;'>Please enter valid words!</p>";
			exit();
		}
		if(!preg_match("/^[a-zA-Z]{1,30}$/", $english)){
			echo "<p style='color: #FF0000;'>Please enter valid words!</p>";
			exit();
		}
		mysqli_query($mysqli, "INSERT INTO words values 
		(null, '{$serbian}', '{$english}')
		");
		mysqli_close($mysqli);
	}
	else
	{
		header("Location:index.html");
		exit();
	}