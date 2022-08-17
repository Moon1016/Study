<?php
function counts(){
    $i = 0;
    $i = $i + 10;
    global $g;
    $g++;
}
$g = 0;
while($g < 10){
    counts();
    print $g."<br>";
}
?>