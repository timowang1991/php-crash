<?php
    for ($x = 0; $x <= 10; $x++) {
        echo $x;
    }

    $x = 1;
    while ($x <= 15) {
        echo "Number $x <br>";
        $x += 1;
    }

    $x = 1;
    do {
        echo "Number $x <br>";
        $x += 1;
    } while ($x <= 15);

    $posts = ['First Post', 'Second Post', 'Third Post'];
    for ($i = 0; $i < count($posts); $i++) {
        echo "$posts[$i] <br>";
    }
    foreach ($posts as $post) {
        echo "foreach $post <br>";
    }
    foreach ($posts as $index => $post) {
        echo "foreach $index - $post <br>";
    }

    $person = [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ];
    foreach ($person as $key => $value) {
        echo "person $key - $value <br>";
    }
?>