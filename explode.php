<?php
$Word = "programiranje"; 
echo "Broj znakova u riječi programiranje je ".strlen($Word)."<br>";

$wordChunks = str_split($Word);
echo "Prvo slovo je: " . $wordChunks[0];

$obrt = array_reverse($wordChunks);

$obrtk = implode($obrt);
echo "Obrnuti redoslijed: ".$obrtk;
