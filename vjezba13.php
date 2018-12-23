<?php
#proizvodi
$productOne ="Canon DSLR 456";
$productTwo ="Korg psx PRO";
$productThree = "Fender Jazz Bass";

#cijene
$productPriceOne = 600;
$productPriceTwo = 7000;
$productPriceThree = 1200;

#ref cijene
$productNormalPriceOne = 600;
$productNormalPriceTwo = 6000;
$productNormalPriceThree = 1500;

$productCheck = 1;

$productCheckName = "";
$productCheckPrice = 0;
$productCheckNormalPrice = 0;

switch ($productCheck) {
		case 1:
		$productCheckName = $productOne;
		$productCheckPrice = $productPriceOne;
		$productCheckNormalPrice = $productNormalPriceOne;
		break;
		
		case 2:
		$productCheckName = $productTwo;
		$productCheckPrice = $productPriceTwo;
		$productCheckNormalPrice = $productNormalPriceTwo;
		break;
		
		case 3:
		$productCheckName = $productThree;
		$productCheckPrice = $productPriceThree;
		$productCheckNormalPrice = $productNormalPriceThreee;
		break;
		
		default:
		$productCheckName = $productOne;
		$productCheckPrice = $productPriceOne;
		$productCheckNormalPrice = $productNormalPriceOne;
		break;
}
		
		
		If ($productCheckPrice > $productCheckNormalPrice) {
			echo "Product " . $productCheckName . " is to expensive!" ;
			} else if ($productCheckPrice < $productCheckNormalPrice) {
			echo "Product " . $productCheckName . " is cheap!" ;
		}else{
			echo "Product " . $productCheckName . " is priced regulary!" ;
		}

?>
