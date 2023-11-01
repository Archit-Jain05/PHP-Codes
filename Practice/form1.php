<html>
    <body>
        
            <form method="post" action="array1.php" target='_blank'>

            Name:<input type='text' name='name'/>
            <input type='submit'/>

            </form>


            <?php
                
                $name=$_POST['name'];
                echo $name;

            ?>

    </body>
</html>