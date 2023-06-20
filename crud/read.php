<?php

include 'db.php';
if (isset($_GET['Serial_number'])){
    $number=$_GET['Serial_number'];
    $view="select * from students where Serial_number=$number";
    if($stmt=mysqli_prepare($view, $connect)){
        if(mysqli_stmt_execute($stmt)){
            $result=mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result)==1){

                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $sname=$row['Student_name'];
                    $sid=$row['Student_Id'];
                    $sun=$row['Student_username'];
                    $spass=$row['Student_password'];
                    
                    // echo "{$row['Serial_number']}</td>";
                    // echo "<td>{$row['Student_name']}</td>";
                    // echo "<td>{$row['Student_Id']}</td>";
                    // echo "<td>{$row['Student_username']}</td>";
                    // echo "<td>{$row['Student_password']}</td>";
                    // echo "<td> <a href='read.php?id='{$row['Serial_number']}>view</a></td>";
                    // echo "<tr>";
            }
        }
    }
}
?>
<tr>
    <th>name</th>
    <td><?php
      echo $sname;
    ?>
    </td>
    
</tr>
<tr>
    <th>userid</th>
    <td><?php
      echo $sid
    ?>
    </td>
</tr>
<tr>
    <th>username</th>
    <td><?php
      echo $sun
    ?>
    </td>
</tr>
<tr>
    <th>password</th>
    <td><?php
      echo $spass
    ?>
    </td>
</tr>

