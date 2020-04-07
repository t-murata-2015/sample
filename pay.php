<?php

require_once 'menu.php';
 
$karaageQuantity = htmlspecialchars($_POST['food_quantity1']);
$chickenQuantity = htmlspecialchars($_POST['food_quantity2']);
$curryQuantity = htmlspecialchars($_POST['food_quantity3']); 

if($karaageQuantity==NULL || $karaageQuantity==NULL || $karaageQuantity==NULL){

    print "数量を入れてください。";

}else{
    
    print "レシート<br>";
    print $karaage->getName()."　".$karaageQuantity."個　".Karaage::calculateEachPrice($karaage->getPrice(), $karaageQuantity)."円<br>";
    print $chicken->getName()."　".$chickenQuantity."個　".Chicken::calculateEachPrice($chicken->getPrice(), $chickenQuantity)."円<br>";
    print $curry->getName()."　".$curryQuantity."個　".Curry::calculateEachPrice($curry->getPrice(), $curryQuantity)."円<br>";
    
    $totalPrice = $karaage->getPrice() * $karaageQuantity + $chicken->getPrice() * $chickenQuantity + $curry->getPrice() * $curryQuantity;
    print "合計：　".$totalPrice."円<br>";
    
}
