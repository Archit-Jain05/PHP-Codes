
<?php 
/*write a program to impement a superclass person , 
make 2, person class has name designation as members faculty has experience and salary as members,  
admin has salary and dat of joining as members classes faculty and admin which inherits person class, 
create the instance of faculty and admin class and test all the methods*/

class person {
    public $name;
    public $des;

    public function __construct($name,$des)
    {
        $this->name=$name;
        $this->des=$des;
    }
}

class faculty extends person {
    public $exp;
    public $sal;

    public function __construct($name,$des,$exp,$sal)
    {
        parent::__construct($name,$des);
        $this->exp=$exp;
        $this->sal=$sal;
    }

    public function getFac() {
        echo '<br>Name: '.$this->name.'<br>Designation: '.$this->des.'<br>Experience: '.$this->exp.'<br>Salary: '.$this->sal.'<br>';
    }
}

class admin extends person {
    public $sal;
    public $doj;

    public function __construct($name,$des,$sal,$doj)
    {
        parent::__construct($name,$des);
        $this->sal=$sal;
        $this->doj=$doj;
    }

    public function getAdmin() {
        echo '<br>Name: '.$this->name.'<br>Designation: '.$this->des.'<br>Salary: '.$this->sal.'<br>Date of joining: '.$this->doj;
    }
}

$f1= new faculty('Archit','Teacher',20,150000);
$f1->getFac();

$a1= new admin('Archit','Teacher',20000,'15/10/2003');
$a1->getAdmin();

?>