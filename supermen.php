<?php

$nizSlika=array(
"https://i.pinimg.com/originals/4a/03/45/4a03458536ca8b8907a3a986e1eb2b38.png",
	"https://secure.img1-fg.wfcdn.com/im/55328678/resize-h400-p1-w400%5Ecompr-r70/4191/41910217/Batman+Justice+League+Standup.jpg",
	"http://i98.fastpic.ru/big/2018/1116/65/aeafbd27134e7839beb1486403d2fe65.jpg");
$nizImena=array("Supermen", "Batman", "Flash");
for ($i=0; $i< count($nizSlika);$i++)
{
	echo"<div style='padding: 20px; border: 1px solid red; display: inline-block; margin: 10px;'>";
	echo "<img src='" .$nizSlika[$i]. "'alt='" .$nizImena[$i]. "'> ";
	echo "<h2 style='text-align: center;'>" .$nizImena[$i]. "</h2></div>";
}
?>