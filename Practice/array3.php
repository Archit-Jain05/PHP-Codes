<html>
    <body>
        <?php

            $a1=array(1,2,3,4,5,6,7);
            $a2=array(5,6,7,8,9,10,11);

            print_r(array_diff($a1,$a2));
            print_r(array_combine($a2,$a1));
        ?>
    </body>
</html>