<?php

$conn=mysqli_connect('localhost','root','','practice');

if($conn->connect_error) {
    die('Connection failed');
}

$q1= "INSERT INTO `pr1`(`name`, `age`, `sem`, `marks`) VALUES ('Archit','18','5','100')";
$conn->query($q1);


?>
