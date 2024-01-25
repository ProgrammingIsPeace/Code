<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Lesson Radio Buttons.php" method="post">
        <input type="radio" name="CC" value="VISA">
        VISA<br>
        <input type="radio" name="CC" value="MASTERCARD">
        MASTERCARD<br>
        <input type="radio" name="CC" value="AMERICAN EXPRESS">
        AMERICAN EXPRESS<br>
        <input type= "submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 
if(isset($_POST["confirm"])){
    if(isset($_POST["CC"])){
        $CC = $_POST["CC"];
        echo $CC;
    }
    else{
        echo "Please pick a creditcard";
    }
}

?>