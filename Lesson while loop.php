<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "Lesson while loop.php" method="post">
        <label>Number</label>
        <input type="text" name= "number">
        <input type="submit" value= "GO">
    </form>
</body>
</html>

<?php 
$num = $_POST["number"] -1;
$counter = 0;

while($counter <= $num){
    $counter++;
    echo $counter . "<br>";

}
?>