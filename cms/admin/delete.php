<?php

session_start();

include_once "../includes/connection.php";
include_once "../includes/article.class.php";

$article = new Article;

if (isset($_SESSION['logged_in'])) {

$articles = $article->fetch_all();
//	
	?>
<html>
	<head>
		<title>Delete article</title>
		<link rel="stylesheet" href="../style/style.css"> 
		
	</head>
	<body>
		<div class="container">
		
			<a href="index.php" id="logo">CMS</a>
            <br>
          	<h1>Delete Article</h1>
          	<form action="delboy.php" method="post">
					
					<?php 
					foreach ($articles as $article)
					{

						echo "<div>";

						echo "<input type='checkbox' name='checkbox' value='".$article['article_id']."'>";
						echo "<label for='checkbox'>".$article['article_title']."</label>";
						echo "</div>";
					}
					?>
				<br>
				<input type="submit" name="delete" id="delete" value="Delete">
			</form>
		</div>	
	</body>
</html>

	<?php
				
}else{
	header('Location: index.php');
}

?>
