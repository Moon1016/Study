<?php
$A = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$B = array(
    array(10,11,12),
    array(13,14,15),
    array(16,17,18)
);

// print $A[0][0];

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        print ("\$A[".$i."][".$j."] = ".$A[$i][$j]." ");
    }
    print ("<br>");
}
print "<hr>";

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        print ("\$B[".$i."][".$j."] = ".$B[$i][$j]." ");
    }
    print ("<br>");
}
print "<hr>";

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        print ("\$C[".$i."][".$j."] = ".$C[$i][$j]." ");
    }
    print ("<br>");
}
print "<hr>";
?>