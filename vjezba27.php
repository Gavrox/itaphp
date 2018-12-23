<?php

$x = 15; //ogranicava broj kolona
$y = 15; //ogranicava broj redova
$nula=0;


//petlja za redove
for ($i=0; $i<$y; $i++, $nula++){
   
    //petlja za kolone
    for ($j=0; $j<$x; $j++){
       
        if ($i==0 || $i==$y-1){
            echo "X";
       
        }else{
            if ($j==0 || $j==$x-1){
                echo "X";
            }else{
              if ($j==$nula){
                    echo "O";
                }
            else{
                echo "H";
                
            }
                   
            }
            
                      
        }
     
    }
    echo "<br>";
    
}

?>