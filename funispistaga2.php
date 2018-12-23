<?php

function ispisTaga($name, $id, $options, $selected, $style){
	if($selected !==0){
	$selected=$selected-1;
	}
echo "<select name='$name' id='$id' style='$style'>";
	echo "<option value=''>Izaberi stavku</option>";
	$brojac=0;
	foreach ($options as $key => $value) {
		if ($selected == $brojac){
			echo "<option selected='selected' value='$key'>$value</option>";
		}else{
			echo "<option value='$key'>$value</option>";
		}
		$brojac++;
	}
echo "</select>";
}
ispisTaga("auto", "id-auto", array("bmw"=>"BMW m3", "toyota"=>"Toyota Supra", "nisan"=>"Nisan skyline"), 3, "color: blue");

?>
