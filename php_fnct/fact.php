<?php
function fact($n){
    if($n == 1) 
        return 1;
    else 
        return $n*fact($n-1);
}

function fact_for($n){
    $factVal = 1;
    for($i = 1; $i <= $n; $i++) {
        $factVal *= $i;
    }
    return $factVal;
}

print fact(5)."<br>";
print fact_for(5)."<br>";
?>