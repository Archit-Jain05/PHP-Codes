<?php
$cokie_name="User";
$cookie_value="Archit";
setcookie($cokie_name,$cookie_value,time()+(864000*30),"/");

if(isset($_COOKIE[$cokie_name]))
{
echo "Cookie is set ".$cokie_name."<br>";
echo "Cookie name ".$_COOKIE[$cokie_name]."<br>";
}
else
{
echo "Cookie is not set ".$cokie_name."<br>";
}
$value="Archit";
setcookie($cokie_name,$value,time()+(864000*30),"/");
echo "Cookie is set ".$cokie_name."<br>";
echo "Cookie name ".$_COOKIE[$cokie_name]."<br>";
if(count($_COOKIE)>0)
{
echo "Cookies are enabled";
}
else
{
echo "Cookies are disabled";
}
setcookie($cokie_name,$cookie_value,time()-3600);
if(count($_COOKIE)>0)
{
echo "Cookies are enabled";
}
else

{
echo "Cookies are disabled";
}
?>
