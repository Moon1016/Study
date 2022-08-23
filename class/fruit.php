<?php			//notepad 에서 작성한 예제
class Fruit{
	private $_name;
	private $_color;
	private $_price;
	public function __construct($name, $color, $price){
		$this->_name = $name;
		$this->_color = $color;
		$this->_price = $price;
	}
	public function print_fruit(){
		print "Name : " . $this -> _name . "<br>";
		print "Color : " . $this -> _color . "<br>";
		print "Price : " . $this -> _price . "<br><br>";
	}
	public function getPrice(){
		return $this -> _price;
	}
	public function setPrice($price){
		$this -> _price = $price;
	}
}
$apple = new Fruit("사과", "red", 1000);
$banana = new Fruit("바나나", "yellow", 700);
$cherry = new Fruit("체리", "red", 1500);
$apple->print_fruit();
$banana->print_fruit();
$cherry->print_fruit();
$cherry->setPrice(1200);
$cherry->print_fruit();
?>
