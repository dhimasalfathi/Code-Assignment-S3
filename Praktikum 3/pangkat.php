<!DOCTYPE html>
<html>
<body>

<?php

function pangkat($angka, $jml) {
    $hasil =  $angka;
    for($i = 1; $i < $jml; $i++) {
        $hasil *= $angka;
    }
    return $hasil;
}

echo "Perpangkatan Duniawi ",pangkat(2, 8);

?>


</body>
</html>