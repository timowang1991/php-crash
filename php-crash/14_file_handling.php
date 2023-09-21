<?php
    $file = 'extras/users.txt';

    if (file_exists($file)) {
        // echo readfile($file);
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        echo $contents;
        fclose($handle);
    } else {
        $handle = fopen($file, 'w');
        $contents = 'Brad' . PHP_EOL . 'Jose' . PHP_EOL . 'William';
        fwrite($handle, $contents);
        fclose($handle);
    }
?>