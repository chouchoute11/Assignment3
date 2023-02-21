<?php
$num = 9; // replace 5 with any number whose factorial you want to find

$factorial = 1;
echo "Factorial of $num is:\n";
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
    echo "$i ";
    if ($i < $num) {
        echo "* ";
    } else {
        echo "= ";
    }
}
echo $factorial;
?>
