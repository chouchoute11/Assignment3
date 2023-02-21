<?php
$size = 5;

for($e = 1; $e <= $size; $e++){

    for($c = 0; $c < $e; $c++){
        echo "*";
    }
    echo "<br>";

}

for($e = 1; $e <= $size -1; $e++){

    for($c = 0; $c < $size - $e; $c++){
        echo "*";

    }
    echo "<br>";

}