<?php
session_start();

include_once "../includes/connection.php";

if (isset($_SESSION['logged_in'])) {
    //display admin index
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
            <ol>
            	<li><a href="add.php">Add Article</a></li>
            	<li><a href="delete.php">Delete Article</a></li>
            	<li><a href="logout.php">Logout</a></li>
            	
            </ol>
		</div>
		
	</body>
</html>
   
   
   <?php
    
} else {
   if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        if(empty($username) or empty($password)) {
            $error = "All fields are required!";
        }else{
            $query = $pdo->prepare("SELECT * FROM users WHERE user_name= :name AND user_password= :password");
            $query->bindValue(":name", $username);
            $query->bindValue(":password", $password);
            
            $query->execute();
            $num = $query->rowCount();
            
            if ($num == 1){
                //corect
                $_SESSION['logged_in']= true;
                header('Location: index.php');
                exit();
            } else {
                //false
                $error = "Incorect details!";
            }
        }
   
   }

?>

<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" href="../style/style.css"> 
	</head>
	<body>
	<div class="wrapper">
		<div class="container">
<a href="../index.php" id="logo">CMS</a>
            <br><br>
            <?php if(isset($error)) { ?>
            <p class="warning"><?php echo $error; ?></p><br>
              <br>
            <?php } ?>
          
		<form action="index.php" method="post" autocomplete="off">
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit" value="Login">
        </form>
		</div>
		
	</body>
</html>
    <?php
    }
//session_destroy();
    ?>