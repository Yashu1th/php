<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label for=""></label>
        <input type="text" name="input">
        <input type="text" name="inputu">
        <input type="text" name="three">
        <input type="submit"value="total">
    </form>
    <form action="math.php" method="post"> 
        <label for="">radius:</label>
        <input type="text" name="radius">
        <input type="submit">
    </form>
</body>
</html>
<?php
$a= $_POST["input"];
$b=$_POST["inputu"];
$c=$_POST["three"];
$d=abs($a);
$e=round($a);
$f=floor($a);
$g=ceil($a);
$h=pow($a,$b);
$i=max($a,$b,$c);
$j=min($a,$b,$c);
$k=pi();
echo $k;

$radius=$_POST["radius"];

$cirum= 2 * pi() * $radius;
echo "circumference is : {$cirum}";

?>