<?php
$abc = array("Computer", "Math", "Physics", "Music", "Electronics");

$def = array(
    "David" => "Computer",
    "Alice" => "Math",
    "Elsa" => "Physics", 
    "Bob" =>"Music",
    "Chris" => array("Electronics", "Statistics")
);

print $abc[0] . "<br>";
print $abc[1] . "<br>";
print $def["David"] . "<br>";

$def["Ko"] = "History";

print_r($def);
print "<hr>";
unset($def["Ko"]);
print_r($def);
print "<hr>";
?>