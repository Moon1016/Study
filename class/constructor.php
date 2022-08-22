<?php
class Fruit{
    private $_fruit_name;
    private $_price;
    private $_color;

    function __construct($name, $price, $color){
        $this -> _fruit_name = $name;
        $this -> _price = $price;
        $this -> _color = $color;
    }

    function setName($name){
        $this -> _fruit_name = $name;
    }
    function setPrice($price){
        $this -> _price = $price;
    }
    function setColor($color){
        $this -> _color = $color;
    }

    function getName(){
        return $this -> _fruit_name;
    }

    function getPrice(){
        return $this -> _price;
    }

    function getColor(){
        return $this -> _color;
    }

    function print_fruit(){
        print "Fruit name : " . $this -> _fruit_name . "<br>";
        print "Color : " . $this -> _color . "<br>";
        print "Price : " . $this -> _price . "<br><br>";
    }
}

$Apple = new Fruit("사과", 1000, "red");
$Banana = new Fruit ("바나나", 500, "yellow");
$Cherry = new Fruit("체리", 1500, "red");
$Apple -> print_fruit();
$Banana -> print_fruit();
$Cherry -> print_fruit();
$Cherry -> setPrice(1200);
$Cherry -> print_fruit();
?>