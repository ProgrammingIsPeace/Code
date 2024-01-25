<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Lesson Switches.php" method= "get">
        <label>Grade: </label>
        <input type= "text" name= "Grade">
        <input type= "submit" value= "rate"><br>

    </form>
</body>
</html>


<?php 
$grade = null;
$grade = $_GET["Grade"];

switch ($grade) {
    case "A":
        echo "You did fantastic";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did okay";
        break;
    case "D": 
        echo "You did bad";
        break;
    case "F": 
        echo "You didnt learn";  
        break;            
        default:
        echo "None valid Grade";  
}
?>