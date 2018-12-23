<html>
   <body>
   
      <form action = "<?php $_SERVER["PHP_SELF"];?>" method = "POST">
         Name: <input type = "text" name = "name" value="programiranje">
         <input type = "submit" />
      </form>
      <?php
      $Word = $_POST['name'];
	   
echo "Dužina stringa je: ".strlen($Word)."<br>";

$wordChunks = str_split($Word);
echo "Prvo slovo je: " . $wordChunks[0];

$obrt = array_reverse($wordChunks);

$obrtk = implode($obrt);
echo "Obrnuti redoslijed: ".$obrtk;
   

	   
	   
	   
	   
	   
	   ?>
   </body>
</html>

