
<?php

/*
3 class admin faculty student
define methods for ewach class and inherit the properties for all these classes
in the class called person. consider appropriate methods in class

fac:name des sal
calsal()

student: rollno name discipline
display()

admin: name des department
display()

person: name type 
display()
*/

 interface Student
    {
    function getStudent($name,$dpt,$year);
    }
 interface Faculty
    {
    function getFaculty($name,$des,$bp,$hw);
    function calSal($bp,$hw);
    }
 interface Admin
    {
    function getAdmin($name,$des,$dep);
    }
 class stackHolder implements Student,Faculty,Admin
 {
 function getStudent($name,$dis,$rno)
 {
 echo "Name:".$name."<br>";
 echo "Discipline:".$dis."<br>";
 echo "Roll no:".$rno."<br><br>";
 }
 function getFaculty($name,$des,$bp,$hw)
 {
 echo "Name:".$name."<br>";
 echo "Designation:".$des."<br>";
 echo "Salary: ". $this->calSal($bp,$hw)."<br><br>";
 }

 function calSal($sal,$hw) 
 {
      return $sal*$hw;
 }

 function getAdmin($name,$des,$dep)
 {
 echo "Name:".$name."<br>";
 echo "Designation:".$des."<br>";
 echo "Department:".$dep."<br><br>";
 }
 }
 $s1= new stackHolder();
 $s1->getStudent("Archit","IT","T001");
 $s1->getFaculty("ABC",'HOD',1500,10);
 $s1->getAdmin('Admin','Head','IT');
 
 ?>