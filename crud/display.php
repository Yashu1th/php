<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table>
        <tr>
            <th>student name</th>
            <th>student id</th>
            <th>student username</th>
            <th>password</th>
        </tr>
        <?php

            include ('db.php');

            $query2="select * from students";
        ?>
    </table>
</body>
</html>