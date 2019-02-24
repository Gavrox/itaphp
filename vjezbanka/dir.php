<?php
$dir=opendir("c:/");
$fajl=readdir($dir);
while ($fajl !=false){
echo $fajl ."<br>";
$fajl=readdir($dir);
}
?>
