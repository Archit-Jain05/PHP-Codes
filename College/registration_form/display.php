<html>
<body>

<h3>Name: <?php echo $_POST["name"] ?>

<h3>Hobbies selected:</h3><?php  
    if(!empty($_POST['hobbie']))
    {
    foreach($_POST['hobbie'] as $checked)
    {
        echo "<br>".$checked;
    }
    }
  ?> 

</body>

</html>