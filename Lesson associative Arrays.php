<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "Lesson associative Arrays.php" method = "post">
        <label>Enter a country</label>
        <input type= "text" name= "country">
        <input type= "submit" value= "capital">
    </form>
</body>
</html>

<?php 
$capitals = array(
    "USA"=>"Washington DC", 
"Germany"=>"Berlin", 
"Italy"=>"Rom");

$capitals["China"] = "Beijing";

$capital = $_POST["country"];
echo $capital;
//$keys = array_keys($capitals);
//$values = array_values($capitals);
//$capitals = array_flip($capitals);

/*foreach($capitals as $key => $value){
    echo"{$key} = {$value} <br>";
}

foreach($keys as $key){
    echo"{$key} <br>";
}

foreach($values as $value){
    echo"{$value} <br>";
} */
//die array funktionen wie pop() funktionieren hier auch
?>