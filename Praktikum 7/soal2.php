<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');

while (!feof($fh)) {
    echo fgets($fh) . "<br />";
}

fclose($fh);
