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

    $directory = scandir(__DIR__);
    echo '<pre>';
    print_r($directory);
    echo '</pre>';

    mkdir('foo');
    rmdir('foo'); // need foo directory be empty

    if (file_exists($file))  {
        echo filesize($file) . '<br>';

        file_put_contents($file, 'Hello World');

        clearstatcache(); // refresh file size cache

        echo filesize($file) . '<br>';
    }
?>