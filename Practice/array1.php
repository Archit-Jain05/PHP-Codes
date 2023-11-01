<html>
    <body>
        <?php

            $num = array(8,4,3,2,5,6,7,1,10,9);

            foreach($num as $numb)
            {
                echo $numb."<br>";
            }
            echo '<br>';

            sort($num);

            foreach($num as $numb)
            {
                echo $numb."<br>";
            }

            rsort($num);
            foreach($num as $numb)
            {
                echo $numb."<br>";
            }

        ?>
    </body>
</html>