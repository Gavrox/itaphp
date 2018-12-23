<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="vjezba25.php">
	<input type="number">
	
	
	
	
	</form>
	
	
	<?php
		  
	function add_2_numbers( $num1=1, $num2=1 ){
	$total = $num1 + $num2;
	return $total;
} 
echo add_2_numbers(10);
		  
?>
		  
		  
</body>
</html>