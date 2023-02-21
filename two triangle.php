<?php
$size = 5;
for($s = 0; $s < $size; $s++){

    for($u = 0; $u < $s ;$u++){
        echo "&nbsp;&nbsp;";

    }
    for($h = 0; $h < ($size - $s) * 2 - 1; $h++){

        echo "*";
    }
    echo "<br>";



}

for($d = 2; $d <= $size; $d++){

    for($e = $size; $e > $d ; $e--){

    echo "&nbsp;&nbsp;";
}

for($m = 0; $m < $d * 2 - 1; $m++){

    echo "*";
}
echo "<br>";
}