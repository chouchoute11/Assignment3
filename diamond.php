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

//$size = 5;
for($s = 0; $s < $size; $s++){

    for($u = 0; $u < $s ;$u++){
        echo "&nbsp;&nbsp;";

    }
    for($h = ($size - $u) *2 - 1; $h > 0; $h--){

        echo "*";
    }
    echo "<br>";



}