<?php
$serverName="localhost";
$userName="root";
$password="";
$db="trylogic";

$connect=mysqli_connect($serverName,$userName,$password,$db);

if(!$connect){
    die("not connected");
}

echo "connected succesfully ";
