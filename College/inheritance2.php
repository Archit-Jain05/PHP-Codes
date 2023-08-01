

<?php 

/*write a program to implement a superclass student , make 2 classes regular /
defaulter which inherits the superclass the student has name dob and marks as members. 
regular class has disciplinje and year, defaulter has number of backlogs as members.
write class defination and display method for both the classes.*/

class student {
    public $name;
    public $dob;

    public function __construct($name,$dob) {
        $this->name=$name;
        $this->dob=$dob;
    }

}

class regular extends student {
    public $dis;
    public $year;

    public function __construct($name,$dob,$dis,$year)
    {
        parent::__construct($name,$dob);
        $this->dis=$dis;
        $this->year=$year;
    }

    function  getReg() {
        echo '';
    }

}

class defaulter extends student {
    public $dis;
    public $kt;

    public function __construct($name,$dob,$kt)
    {
        parent::__construct($name,$dob);
        $this->kt=$kt;
   
    }
}

$r1 = new regular('Archit','19/10/2005','IT','3rd Year')

?>