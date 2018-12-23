<?php
$html = <<<HTML
<div style="#S#"> #I# </div>
HTML;
$divNum = 10; 
$style = "border: 1px solid black; background: yellow; margin: 5px; padding: 4px;";

$html = str_replace("#S#", $style, $html);  
$i = 0;
do
    {
        echo str_replace("#I#", $i, $html); 
        $i++;   
    } while ($i < $divNum);
?>
