<?php
    include ("db.php");


    $name=$_POST['studentName'];
    $id=$_POST['studentId'];
    $userName=$_POST['userName'];
    $pass=$_POST['password'];

    $query="insert into students(Student_name,Student_Id,Student_username,Student_password) values('$name','$id','$userName','$pass')";

    if(mysqli_query($connect,$query)){
        echo "data inserted succesfully";
    }
    else{
        echo "data is not inserted";
    }
