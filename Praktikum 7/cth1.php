<?php
$filename = 'test.txt';
$file_handle = fopen($filename, 'r') or die("Can't open file");
$content = file_get_contents($filename);
echo $content;
fclose($file_handle);
