<?php
$a1 = mt_rand(1,100);
$a2 = mt_rand(1,100);
$a3 = mt_rand(1,100);
$a4 = mt_rand(1,100);
$a5 = mt_rand(1,100);
$a6 = mt_rand(1,100);

$b1="Januar";
$b2="Februar";
$b3="Mart";
$b4="April";
$b5="Maj";
$b6="Juni";
    
$iteracija = 0;
$mjesec = 0;

for ($i=0; $i<6; $i++) {
    
    switch($i){
        case 0:
            $iteracija=$a1;
            $mjesec=$b1;
            break;
        case 1:
            $iteracija=$a2;
            $mjesec=$b2;
            break;
        case 2:
            $iteracija=$a3;
            $mjesec=$b3;
            break;
        case 3:
            $iteracija=$a4;
            $mjesec=$b4;
            break;
        case 4:
            $iteracija=$a5;
            $mjesec=$b5;
            break;
        case 5:
            $iteracija=$a6;
            $mjesec=$b6;
            break;
        default:
            $iteracija=$a1;
            $mjesec=$b1;
            break;
    }
    echo $mjesec;
for ($j=0; $j<$iteracija; $j++){
     if ($iteracija<50){
         echo "<span style='background-color: red; width: 8px; height: 8px; margin-right: 3px; display:inline-block;'></span>";
     }elseif ($iteracija >=50 && $iteracija < 90){
         echo "<span style='background-color: orange; width: 8px; height: 8px; margin-right: 3px; display:inline-block;'></span>";
     }else{
         echo "<span style='background-color: green; width: 8px; height: 8px; margin-right: 3px; display:inline-block;'></span>";
     }
    }
    echo "<br>";
}
    
    
    ?>
