<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Lesson 6b.php" method="post">
        <label>radius:</label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">


    </form><br>
    
</body>
</html>

<?php 
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

echo "it has a radius of {$circumference}cm <br>";
echo "The area of the circle is {$area}cm^2 <br>";
echo "the volume of the ball is {$volume}cm^3<br>";
?>