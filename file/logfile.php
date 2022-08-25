<?php
$filep = fopen("./logfile.txt", "a");
if(!$filep) die("Could not open". $logfile);
$time = date("Y-m-d H:i:s", time());

fputs($filep, $time);
fputs($filep, "\n");
print "Connect Service<br>";

$filep = fopen("./logfile.txt", "r");
if(!$filep) die("Could not open". $logfile);

while($line = fgets($filep, 1024))
    print $line . "<br>";

fclose($filep);
?>