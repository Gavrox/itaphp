<?php
$arr = array("Serbia"=>"Belgrade", "France"=>"Paris", "England"=>"London");

array_walk($arr, 'arrFunc', ' is capital city of state which name is ');

function arrFunc($value, $key, $g){
	echo $value . $g . $key . ".<br>";

}
$arr = array( "Belgrade", "Paris", "London", "Washington" );
print_r($arr);
echo array_pop( $arr )."<br>";
print_r($arr);
echo array_pop( $arr )."<br>";
print_r($arr);
echo array_pop( $arr )."<br>";
echo array_pop( $arr )."<br>";
print_r($arr);
