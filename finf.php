<?php
function bar1(){
  return "Hello"."<br>";
 }


function foo($i){
 function bar($i){
  return $i*4;
 }
 return bar($i)*4;     
}
$ff = foo(4);
 for ($f=1; $f<$ff; $f++){
	 if ($f%2==0){
	echo "<span style='color:red';>" . bar1(). "</span>";
	 }
	 else
	 	 echo bar1();
	 
 }
