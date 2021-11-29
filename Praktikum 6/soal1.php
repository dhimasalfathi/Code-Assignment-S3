<?php
    $str = "BAPAK PRESIDEN JOKO WIDODO";
    $str = strtolower($str);   
    $arr = explode(" ",$str);
    $arrlength = count($arr);

    echo "'";
    for($x = 0; $x < $arrlength; $x++) {
        echo ucwords($arr[$x]);
        if ($x < $arrlength - 1 ) {
            echo " ";
        }
    }
    echo "'";
  ?>