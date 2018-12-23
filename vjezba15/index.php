<html>

<head>
	<title>Include</title>
	<meta charset="utf-8">
</head>

<body>
	<a href="index.php?page=1">Page one</a>
	<a href="index.php?page=2">Page two</a>
	<a href="index.php?page=3">Page three</a>

	<?php
		 @$page = $_GET['page'];
	switch ($page) {
			
		case 1:
			require 'page1.php';
				break;
			case 2:
			require 'page2.php';
				break;
			case 3:
			require 'page3.php';
				break;
		default:
			require 'page1.php';
			break;
				
	}
	?>

</body>

</html>
