<?php
function my_log($parm, $base = 2){
    $result = log($parm) / log($base);
    return $result;
}

print my_log(8,2)."<br>";
print my_log(8)."<br>";
?>