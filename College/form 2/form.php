<!DOCTYPE HTML>
<html>  
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br><br>
Age: <input type="age" name="age"><br><br>
Gender: 
<input type="radio" id="Male" name="gender" value="Male" />
<label for="Male">Male</label>
<input type="radio" id="Female" name="gender" value="Female" />
<label for="Female">Female</label>
<br><br>
<input type="submit" onclick="validate()">
</form>


<?php

function validate()
{
    echo "Hello world";
}


?>

</body>
</html>