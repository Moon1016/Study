<?php
function inc01(){
    $i = 1;
    print $i."<br>";
    $i++;
}

for($i = 0; $i < 10; $i++) {
    inc01();
}

function inc02(){
    static $i = 1;
    print $i."<br>";
    $i++;
}
print "<hr>";

for($i = 0; $i < 10; $i++) {
    inc02();
}
?>