<?php
class Student{
    private $studentID;
    private $studentName;
    public function printStudent(){
        print "ID = " . $this -> studentID . "<br>";
        print "Name = " . $this -> studentName . "<br>";
    }
    public function setStat($id, $name){
        $this -> studentID = $id;
        $this -> studentName = $name;
    }
    /* public function setID($id){
        $this -> studentID = $id;
    }
    public function setName($name){
        $this -> studentName = $name;
    } */
    public function getID(){
        return $this -> studentID;
    }
}

$std01 = new Student();
$std02 = new Student();
$std03 = new Student();
$std01 -> setStat("2017111111", "Kim");
$std02 -> setStat("2017222222", "Lee");
$std03 -> setStat("2017333333", "Choi");
/* $std01 -> setID("2017111111");
$std02 -> setID("2017222222");
$std03 -> setID("2017333333");
$std01 -> setName("Kim");
$std02 -> setName("Lee");
$std03 -> setName("Choi"); */
$std01 -> printStudent();
$std02 -> printStudent();
$std03 -> printStudent();
print $std01 -> getID();
?>