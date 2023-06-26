<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="validate.php" method="post">
        <label for="">username:</label>
        <input type="text" name="username"><br/>
        <label for="">age:</label>
        <input type="text" name="age"><br/>
        <label for="">email:</label>
        <input type="text" name="email"><br/>
        <input type="submit" name="ok" value="ok">
    </form>

</body>

</html>
<?php

if (isset($_POST['ok'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        // $username=$_POST["username"];
        // $username = filter_input(INPUT_POST, 'username', FILTER_val);
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    echo "Hello " . $username."<br>";
    if(empty($age)){
        echo "enter proper age<br/>";
    }else{

        echo "your age is {$age} years old <br/>";
    }
    
    if (empty($email)) {
        echo"enter proper email<br/>";
    }
    else{

        echo "{$email}";
    }
}
?>