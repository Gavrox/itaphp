<?php
$nizTemperatura = array(30, 1, 5, 3, 11, 12, 18, 12, 17, 10, 34, 13, 5, 9, 19, 22, 28, 31, 15, 19, 23, 28, 33, 24, 25, 11, 6, 12, 9, 1);
echo "Sve temperature u nizu: ";
foreach ($nizTemperatura as $temperatura) {
	echo $temperatura ." ";
	}
$ukupniZbirTemperatura=0;
for ($i=0; $i<count($nizTemperatura); $i++){
	$ukupniZbirTemperatura += $nizTemperatura[$i];
}
$ukupniBrojTemperatura = sizeof($nizTemperatura);
	$prosjecnaTemperatura = $ukupniZbirTemperatura/$ukupniBrojTemperatura;
$prosjecnaTemperatura =round($prosjecnaTemperatura);
	echo "<br> <br>";
	echo "Prosječna temperatura: " . $prosjecnaTemperatura;

//sorting
sort ($nizTemperatura);
echo "<br><br>";
echo "Prvih pet najmanjih temperatura <br>";
for ($j=0; $j<5; $j++) {
	echo $nizTemperatura[$j] . " <br>";
}

rsort ($nizTemperatura);
echo "<br><br>";
echo "Prvih pet najvećih temperatura <br>";
for ($k=0; $k<5; $k++) {
	echo $nizTemperatura[$k] . " <br>";
}

?>
