<!DOCTYPE html>
<html>
<body>

<?php

function get_max() {
    $list = func_get_args();
    $total = func_num_args();

    $temp = 0;
    for ($i = 0; $i < $total; $i++) {

        for ($j = $i + 1; $j < $total; $j++) {

            if($list[$i] > $list[$j]) {
                $temp = $list[$i];
                $list[$i] = $list[$j];
                $list[$i] = $temp;
            }
        }
    }
    return$list[$i-1] ;
}

echo get_max(10, 20), "<br>";        // Output: 20
echo get_max(10, 20, 30), "<br>";    // Output: 30
echo get_max(10, 20, 30, 40), "<br>"; // Output: 40


?>

</body>
</html>