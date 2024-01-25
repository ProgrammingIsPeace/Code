<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "Lesson for loop.php" method="get">
        <label>how many loops</label>
        <input type= "text" name= "loophole">
        <input type= "submit" value= "start">
    </form>
</body>
</html>

<?php 
$X = $_GET["loophole"];

for($i = 0; $i < $X; $i++){
    echo $i . "<br>";
}
?>