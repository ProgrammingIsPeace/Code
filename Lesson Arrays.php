<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "Lesson Arrays.php" method= "post">
        <label>List</label>
        <input type= "text" name= "Array">
        <input type= "submit" value= "into array">
    </form>
</body>
</html>

<?php 
$Array = array($_POST["Array"]);

array_push($Array, "Mad apple", "kiwi");
array_pop($Array);
echo count($Array);
//array_shift($Array);
$reversedArray = array_reverse($Array);


//$Array[0] = "Pumpanickel";
//problem: egal in welcher schreibweise es wird als ein element gewertet durch html.

foreach($reversedArray as $word){
    echo $word . "<br>";

}
?>