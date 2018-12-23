<?php


$numberOfCharacters = 50;
$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$allCharacters = $characters . strtolower($characters);
echo $allCharacters;
echo strlen($allCharacters);
echo "<br>";
$pass = "";
for($i=0;$i<$numberOfCharacters;$i++){
    $pass.=$allCharacters[rand(0,strlen($allCharacters)-1)];
}

	echo $pass . " >>>>is pasword";
echo"<br>";
echo strlen($pass);

	

?>
