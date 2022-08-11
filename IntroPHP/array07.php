<?php
$fruits = array(
    "Apple" => "Red",
    "Pear" => array("Brown", "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array("Red", "Green"),
    "Banana" => "Yellow"
);
$fruits1 = array(
    "Apple" => "Red",
    "Pear" => array("Color1" => "Brown", "Color2" => "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array("Red", "Green"),
    "Banana" => "Yellow"
);
print "Pear = ".$fruits1["Pear"]["Color1"]."<br>";
print "Tomato = ".$fruits1["Tomato"][0]."<hr>";

print "******Before******<br>";
print_r($fruits);
print"<br><br>";
unset($fruits["Pear"], $fruits["Banana"]);
print "******After******<br>";
print_r($fruits);
print "<br><br>";
?>