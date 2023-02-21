<?php 
$size = 5;
for($d = 0; $d < $size; $d++){
    for($e = 0; $e < $size - $d - 1; $e++){

    echo "&nbsp;&nbsp;";
}

for($m = 0; $m < 2 * $d + 1; $m++){

    echo "*";
}
echo "<br>";
}
