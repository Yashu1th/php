

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">

        <!-- <button>Order a Pizza</button> -->
        <label for="username">username:</label>
        <input type="text" name="username"> <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="login">
    </form>


</body>
</html>  

<?php
    // echo "{$_GET["username"]}<br>";
    echo $_GET["password"];

    echo "I love paneer butter masala <br>";
    echo "because it is finger licking good <br>";
    $a="yaswanth narikamalli";
    $b="paneer butter masala";
    $c="yaswanthnarikamalli@gmail.com";
    $d=25;
    $e=6;
    $f=5.8;
    $g=2.5;

    $is_employed=true;
    $is_online=false;
    $for_sale=true;

    echo "Holla {$a} <br>";
    echo "you like {$b} <br>";
    echo "your email is {$c} <br>";
    echo "your age is {$d} <br>";
    echo "You would like to buy {$e} panner packets<br>";
    echo "price for the paneer is \${$f} <br>";
    echo "Tax for the purchase is {$g}% <br> ";

    echo "is online:{$is_online} <br>";
    echo"for sale:{$for_sale} <br>";
    $total=null;
    $total=$e*$f;
    echo"your total amount is \$ {$total}<br>";





    //edhi comment mawa
    /* edhi 
    multi line
    comment mawa*/
    
?>