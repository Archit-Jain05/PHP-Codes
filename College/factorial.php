
<?php 

function fact($num) 
{
    $total=1;
    for($i=1;$i<=$num;$i++) {

        $total=$total*$i;
        
    };

    return $total;
};

echo "Answer = ".fact(3)


?>