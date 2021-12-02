<?php
$filename = 'test.txt';
$file_handle = fopen($filename, 'a+') or die('Cant open file');
$content = 'This is the file content';

if (flock($file_handle, LOCK_EX)) {
    if (!fwrite($file_handle, $content)) {
        echo "Cannot write to file $filename";
    }

    flock($file_handle, LOCK_UN);
}
