<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Enter the pizza quantity</label>
    <input type="text" name="number">
    <!-- <label>password</label>
    <input type="password" name="password"> -->
    <input type="submit" value="total">
    </form>
</body>
</html>


<?php
 $quantity = $_POST["number"];
 $bill = $quantity*5.99;
 echo abs($quantity)."<br>";
 echo ceil($quantity)."<br>";
 echo round($quantity)."<br>";
 echo floor($quantity)."<br>";
 echo "your ordered {$quantity} pizzas"."<br>";
 echo "your total is \${$bill}"
?>