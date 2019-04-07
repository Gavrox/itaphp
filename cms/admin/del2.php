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
          <h4>Delete Article</h4>
          
               
          
          <form action="delboy.php" method="post">

<table border="1">
		<tr>		
			<th>Article ID</th>
			<th>Article Title</th>
		</tr>
			<?php 
			foreach ($articles as $article)
			{
			
			echo "<tr>";
			
			echo "<td><input type='checkbox' name='checkbox' value='".$article['article_id']."'></td>";
			echo "<td>".$article['article_title']. "</td>";
			echo "</tr>";
			}
			echo "</table>";
			
			?>
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
