<?php

	$db_server = "localhost";
	$db_username = "root";
	$db_password = "";
	
	$mysqli = mysqli_connect($db_server, $db_username, $db_password);
	mysqli_query($mysqli, "CREATE DATABASE Translation CHARACTER SET utf8 COLLATE utf8_unicode_ci");
	mysqli_select_db($mysqli, "Translation");
	mysqli_query($mysqli, "CREATE TABLE words 
	(id int primary key auto_increment,
	 word_sr varchar(30),
	 word_en varchar(30))
	");
