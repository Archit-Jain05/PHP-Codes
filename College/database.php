<?php

$username='Archit';
$password='';
$servername='localhost';
$dbname='student_db';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
}

$sql = "INSERT INTO `employee`(`Employee_ID`, `Name`, `Designation`, `Department`) VALUES ('T001','ABC','Manager','IT')";
$conn->query($sql);
$sql = "INSERT INTO `employee`(`Employee_ID`, `Name`, `Designation`, `Department`) VALUES ('T002','Chintan','CEO','IT')";
$conn->query($sql);
$sql = "INSERT INTO `employee`(`Employee_ID`, `Name`, `Designation`, `Department`) VALUES ('T003','Khushi','Pune','IT')";
$conn->query($sql);
$sql = "INSERT INTO `employee`(`Employee_ID`, `Name`, `Designation`, `Department`) VALUES ('T008','Muskaan','Senior Managaer','IT')";
$conn->query($sql);

?>