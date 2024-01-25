<?php 
$hours = 40;
$rate = 22;
$weekly_pay = null;

if($hours <= 0){
    $weekly_pay=0;
}

elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
}

else{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}


echo "you have made {$weekly_pay}\$ this week";
?>