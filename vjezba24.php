<?php
$broj = 13;
$broj1 = 0;
$broj2 = 0;
$broj3 = 0;
$broj4 = 0;
$broj5 = 0;
$izvuceni = 0;
for ($i=0; $i<5; $i++)
{
	$izvuceni = rand(1,25);
	while (true)
	{
		if ($izvuceni==$broj1 || $izvuceni==$broj2 || $izvuceni==$broj3 || $izvuceni==$broj4 || $izvuceni==$broj5 ){
				$izvuceni = rand(1,25);
continue;
		}else if ($izvuceni == $broj){
				echo "<span style= 'width: 30px; display: inline-block; color:red;'> " .$izvuceni. "</span>";
								
			} else {
				echo "<span style='width: 30px; display: inline-block; color:black;'> " .$izvuceni. "</span>";
			}break;
		}
	
	switch ($i) {
			case 0:
			$broj1=$izvuceni;
			break;
			case 1:
			$broj2=$izvuceni;
			break;
			case 2:
			$broj3=$izvuceni;
			break;
			case 3:
			$broj4=$izvuceni;
			break;
			case 4:
			$broj5=$izvuceni;
			break;
		default:
			$broj1=$izvuceni;
			
	}
}

	  ?>
