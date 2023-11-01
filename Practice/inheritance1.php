<html>
    <body>
        <?php

            class Student {

                protected $name;
                protected $dob;
                protected $marks;

                public function __construct($name,$dob,$marks) 
                {
                    $this->name = $name;
                    $this->dob = $dob;
                    $this->marks=$marks;

                }


            }

            class Regular extends Student {

                protected $disc;
                protected $year;


                public function __construct($name,$dob,$marks,$disc,$year) {
                    parent::__construct($name,$dob,$marks);
                    $this->disc=$disc;
                    $this->year=$year;
                }

                public function display_detail() {
                    echo $this->name;
                    echo $this->marks;
                }
            }


            $r1 = new Regular('Archit','19-10,2005',100,'IT',3);
            $r1->display_detail();

        ?>
    </body>
</html>