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
            <th>Sno</th>
            <th>student name</th>
            <th>student id</th>
            <th>student username</th>
            <th>password</th>
            <th>view</th>
        </tr>
        <tr>
        <?php

        include('db.php');

        $query2 = "select * from students";
        if ($result = mysqli_query($connect, $query2)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<td>{$row['Serial_number']}</td>";
                    echo "<td>{$row['Student_name']}</td>";
                    echo "<td>{$row['Student_Id']}</td>";
                    echo "<td>{$row['Student_username']}</td>";
                    echo "<td>{$row['Student_password']}</td>";
                    echo "<td> <a href='read.php?id='".$row['Serial_number'].">view</a></td>";
                    echo "<tr>";
                }
            }
        }
        ?>
        </tr>
    </table>
</body>

</html>