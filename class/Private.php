<?php
class Student02{
    private $studentID;
    private $studentName;
    public function printStudent(){
        print "ID = " . $this -> studentID . "<br>";
        print "Name = " . $this -> studentName . "<br>";
    }
    public function setID($id){
        $this -> studentID = $id;
    }
    public function setName($name){
        $this -> studentName = $name;
    }
    public function getID(){
        return $this -> studentID;
    }
    public function getName(){
        return $this -> studentName;
    }
}

$std01 = new Student02();
$std02 = new Student02();
$std03 = new Student02();
$std01 -> setID("2017111111");
$std02 -> setID("2017222222");
$std03 -> setID("2017333333");
$std01 -> setName("Kim");
$std02 -> setName("Lee");
$std03 -> setName("Choi");
$std01 -> printStudent();
$std02 -> printStudent();
$std03 -> printStudent();
print $std01 -> getID();
?>