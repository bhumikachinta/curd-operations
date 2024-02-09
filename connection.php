<?php

$servername = "localhost";
$username="root";
$password= "";
$db_name ="mydb";
$conn = new mysqli($servername,$username,$password,$db_name,3308);
if($conn->connect_error){
    die("connection fail".$conn->connect_error);
}
// echo "successfully connected";
?>