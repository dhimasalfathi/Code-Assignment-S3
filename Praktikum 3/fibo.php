<!DOCTYPE html>
<html>
<body>

<?php

function fibo( $n) {

	$f = array();
	$i = 0;

	$f[0] = 0;
	$f[1] = 1;
	
	for ($i = 2; $i <= $n; $i++) {

		$f[$i] = $f[$i-1] + $f[$i-2];
	}
	
	return $f[$n];
}

$n = 88;
echo "Fibonacci ", fibo($n), "<br>";

?>


</body>
</html>