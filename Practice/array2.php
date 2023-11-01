<html>
    <body>
        <?php

            $a1= array('hi'=>'bye','hello'=>'world','HELLOO'=>'WELCOME');
            print_r(array_change_key_case($a1,CASE_LOWER));
            

        ?>
    </body>
</html>