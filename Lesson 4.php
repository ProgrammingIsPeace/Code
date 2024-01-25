<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Lesson 4.php" method="get">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">

    </form>
</body>
</html>

<?php 
$item = "pizza";
$price = 17.99;
$quantity = $_GET["quantity"];
$total = null;
$total = $price * $quantity;

echo "You have ordered{$quantity} x {$item}.<br>The price of your {$item} is: \${$total}";
?>