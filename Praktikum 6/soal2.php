<?php
    $str = "Fakultas.Ilmu.Komputer.UB";   
    $arr = explode(".",$str);
    $arrlength = count($arr);

    echo "[";
    for($x = 0; $x < $arrlength; $x++) {
        echo "'$arr[$x],'";
        if ($x < $arrlength - 1 ) {
            echo " ";
        }
    }
    echo "]";


  ?>

  
