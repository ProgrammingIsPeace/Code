<?php 
//or = ||
//and = &&

$temp = 25;
$cloudy = true;

if($temp >= 0 && $temp <=30){
echo "The weather is good.<br>";
}
else{
    echo"The weather is bad.<br>";
}

if($cloudy == true){
    echo "Cloudy, rain is possible.";
}

else{
    echo "beautiful sky.";
}
?>