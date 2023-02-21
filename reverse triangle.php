<?php
$size = 5;
for($s = 0; $s < $size; $s++){

    for($u = 0; $u < $s ;$u++){
        echo "&nbsp;&nbsp;";

    }
    for($h = 0; $h < 2 * ($size - $s); $h++){

        echo "*";
    }
    echo "<br>";



}