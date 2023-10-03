<html>
<body>

<?php  
error_reporting(E_ALL ^ E_WARNING);
$name = $_POST["name"];
$age = $_POST["age"];
$gender =  $_POST["gender"];

if(empty($name) || empty($age) || empty($gender))
{
    echo("Please enter all fields");
}
else 
{
   
    echo("Welcome "); echo($name); echo("<br><br>");
    echo ("Age: "); echo($age); echo("<br><br>");
    echo ("Gender: "); echo($gender); echo("<br><br>");
}
?>


</body>
</html>