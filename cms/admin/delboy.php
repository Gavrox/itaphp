<?php

session_start();

include_once "../includes/connection.php";
include_once "../includes/article.class.php";

$article = new Article;

if (isset($_SESSION['logged_in'])) {
	//display delete page
	
	if (isset($_POST['delete'])){
		$chk = $_POST['checkbox'];
		$query = $pdo -> prepare('DELETE FROM articles WHERE article_id = :id');
		$query -> bindParam(':id', $chk);
		$query -> execute();

		header('Location: delete.php');
		
		$articles = $article->fetch_all();
	}
}
	?>