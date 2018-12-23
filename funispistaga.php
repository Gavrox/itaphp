<?php

function ispisTaga($nazivTaga, $style, $sadrzaj, $brPonavljanja){
$brPonavljanja=($brPonavljanja==0) ? 1 : $brPonavljanja;
	for ($i=0; $i<$brPonavljanja; $i++){
		echo "<$nazivTaga style='$style'>";
		echo $sadrzaj;
		echo "</$nazivTaga>";
	}
}
ispisTaga ("p", "color: red; background: gray;", "Lorem ipsum tiruliru", 0);
ispisTaga ("h1", "color: blue; background: gray;", "Lorem ipsum tiruliru2", 3);

?>
