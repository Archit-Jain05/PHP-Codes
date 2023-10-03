<?php
$cokie_name=$_POST["name"] ;
$cookie_value=$_POST["age"] ;


setcookie($cokie_name,$cookie_value,time()+(864000*30),"/");

if(isset($_COOKIE[$cokie_name]))
{
echo "Name:".$cokie_name."<br>";
echo "Age: ".$cookie_value."<br>";
}


?>
