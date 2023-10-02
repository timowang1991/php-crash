<?php

$users = ['John', 'Jane', 'Bob', null];

if (isset($users[0])) {
    echo 'User 0 found!' . '<br/>';
}
if (isset($users[3])) {
    echo 'User 3 found!' . '<br/>';
}

if (array_key_exists(0, $users)) {
    echo 'array_key_exists User 0 found!' . '<br/>';
}
if (array_key_exists(3, $users)) {
    echo 'array_key_exists User 3 found!' . '<br/>';
}

echo '<pre>';
print_r($users);
echo '</pre>';

$filteredUsers = array_filter($users, fn($user) => $user !== 'Bob');
echo '<pre>';
print_r($filteredUsers);
echo '</pre>';

$mappedUsers = array_map(fn($user) => strtoupper($user), $users);
echo '<pre>';
print_r($mappedUsers);
echo '</pre>';

$mergedUsers = array_merge($users, ['Mary', 'Mike']);
echo '<pre>';
print_r($mergedUsers);
echo '</pre>';

asort($users);
echo '<pre>';
print_r($users);
echo '</pre>';

sort($users);
echo '<pre>';
print_r($users);
echo '</pre>';


?>