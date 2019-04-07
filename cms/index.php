<?php
include_once('includes/connection.php');
include_once('includes/article.class.php');

$article= new Article;
$articles = $article->fetch_all();

?>
<html>
	<head>
		<title>News portal</title>
		<link rel="stylesheet" href="style/style.css"> 
	</head>
	<body>
		<div class="container">
<a href="index.php" id="logo">CMS</a>
		<ol>
            <?php foreach ($articles as $article){
            ?>
			<li>
				<a href="article.php?id=<?php echo $article['article_id']; ?>">
					<?php echo $article['article_title']; ?>
				</a>
				-<small>
                Posted: 
            <?php echo date('d.m.Y.', $article['article_time'])
                ?>
                </small>
			</li>
            <?php } ?>
		</ol>
            <br>
            <small><a href="admin/index.php">Admin</a></small>
		</div>
	</body>
</html>
