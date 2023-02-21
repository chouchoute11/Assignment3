<?php

$num = 11; // replace 11 with any number up to which you want to find the Fibonacci sequence

echo "Fibonacci sequence up to $num is:\n";

$a = 0;
$b = 1;
echo $a . " ";
echo $b . " ";

for ($i = 2; $i < $num; $i++) {
    $c = $a + $b;
    echo $c . " ";
    $a = $b;
    $b = $c;
}
?>

  