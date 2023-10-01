<?php
    // include '25_nav.php';
?>
<?php
    // include '25_nav.php'; // will create warning because a constant is defined twice
?>
<?php
    // include_once '25_nav.php'; // will not create warning because it includes once'
?>

<?php
    // require '25_nav.php';
?>
<?php
    // require '25_nav.php'; // will create warning because a constant is defined twice
?>
<?php
    // require_once '25_nav.php'; // will not create warning because it includes once'
?>

<?php
    // include_once 'non-existing-file.php'; // include will not stop this file's execution, therefore <h1>25_including_php_files</h1> is rendered
    // require_once 'non-existing-file.php'; // require will stop this file's execution immediately if encounter fatal error, therefore <h1>25_including_php_files</h1> is not rendered
?>

<?php
    include_once '25_nav.php';
?>

<h1>25_including_php_files</h1>

<?php
    $data = include_once '25_return_data.php';
    echo $data . '<br>';
?>