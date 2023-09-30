<?php

declare(strict_types=1)

// function getStatus(mixed $paymentStatus, bool $showMessage = true) {
function getStatus(int|float $paymentStatus, bool $showMessage = true) {
    $message = match($paymentStatus) {
        1 => 'Success',
        2 => 'Denied',
        default => 'Unknown'
    };

    if ($showMessage) {
        var_dump($message);
        return null;
    }
    return $message;
}

echo '1' . getStatus(1) . '<br/>';
echo '2' . getStatus(2) . '<br/>';
echo '3' . getStatus(3) . '<br/>';
echo '3' . getStatus('3') . '<br/>'; // throws error because strict_types is enabled

?>