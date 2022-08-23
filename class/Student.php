<?php
class Student01{
    public $studentID;
    public $studentName;
    public function printStudent(){
        print "ID = " . $this -> studentID . "<br>";
        print "Name = " . $this -> studentName . "<br>";
    }
}
$std01 = new Student01();
$std02 = new Student01();
$std03 = new Student01();
$std01 -> studentID = "2017111111";
$std02 -> studentID = "2017222222";
$std03 -> studentID = "2017333333";
$std01 -> studentName = "Kim";
$std02 -> studentName = "Lee";
$std03 -> studentName = "Choi";
$std01 -> printStudent();
$std02 -> printStudent();
$std03 -> printStudent();
print $std01 -> studentID;
?>