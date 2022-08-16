<?php
function add($a, $b){
    $hap = $a + $b;
    return $hap;
}
function sub($a, $b){
    $hap = $a - $b;
    return $hap;
}
function mul($a, $b){
    $hap = $a * $b;
    return $hap;
}
function div($a, $b){
    $hap = $a / $b;
    return $hap;
}
print "3 + 5 = ".add(3,5)."<br>";
print "3 - 5 = ".sub(3,5)."<br>";
print "3 * 5 = ".mul(3,5)."<br>";
print "3 / 5 = ".div(3,5)."<br>";
?>