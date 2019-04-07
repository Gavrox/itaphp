<?php

session_start();

include_once "../includes/connection.php";

if (isset($_SESSION['logged_in'])) {
	// display add page
	if (isset($_POST['title'], $_POST['content'])){
		$title = $_POST['title'];
		$content = nl2br($_POST['content']);
		
		if (empty($title) or empty($content)){
			$error = "All fields are required";
			
			
		}else{
			$query = $pdo->prepare('INSERT INTO articles (article_title, article_content, article_time) VALUES (:title, :content, :time)');
				$query -> bindValue(':title', $title);
				$query -> bindValue(':content', $content);
				$query -> bindValue(':time', time());
			
				$query->execute();
			header('Location: index.php');
			
		}
	}
	?>
<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" href="../style/style.css"> 
	</head>
	<body>
		<div class="container">
<a href="index.php" id="logo">CMS</a>
            <br>
          <h4>Add Article</h4>
          
          <?php if(isset($error)) { ?>
            <p class="warning"><?php echo $error; ?></p><br>
              <br>
            <?php } ?>
         
           <form action="add.php" method="post" autocomplete="off">
          	<input type="text" name="title" placeholder="Title"><br>
          	<textarea name="content" id="" cols="50" rows="15" placeholder="Content"></textarea><br><br>
          	<input type="submit" value="Add Article">        	
          	
          </form>
		</div>
		
	</body>
</html>
<?php	
}else{
	header('Location: index.php');
}


?>