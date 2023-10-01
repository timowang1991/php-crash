<?php

function getPermission() {
    sleep(2);

    return 2;
}

$permission = getPermission();

?>

<?php if ($permission === 1) : ?> <!-- wait for 2 seconds -->
    <h1>hello admin</h1>
<?php elseif($permission === 2): ?> <!-- wait for 4 seconds -->
    <h1>hello mod</h1>
<?php else: ?>
    <h1>hello guest</h1>
<?php endif; ?>

<?php

function getUsers() {
    sleep(2);

    return ['John', 'Jane', 'Mary'];
}

$userCount = count(getUsers());

for ($i = 0; $i < count(getUsers()); $i++) {
    echo $userCount;
}

?>