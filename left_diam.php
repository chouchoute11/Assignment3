<?php
$size  =5;

for($l = 1; $l <= $size;$l++ ){

    for($p = 0; $p < $size - $l; $p++){

        echo "&nbsp;&nbsp;";
     }
     for($y = 0; $y < $l; $y++){

            echo "*";
     }
     echo "<br>";

}

for($l = 1; $l <= $size - 1;$l++){

    for($p = 0; $p < $l; $p++){
        echo "&nbsp;&nbsp;";
    }
for($y = 0; $y < $size -$l; $y++){

    echo "*";
}
echo "<br>";
}