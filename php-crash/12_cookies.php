<?php
    setcookie('name', 'Brad', time() + 86400 * 30);

    if (isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
        echo '<br>';
    }

    var_dump($_COOKIE);

    // setcookie('name', '', time() - 86400); // unset (set it in the past)
?>