<?php $permission = 1; ?>
<?php if ($permission === 1) : ?>
    <h1>hello admin</h1>
<?php elseif($permission === 2): ?>
    <h1>hello mod</h1>
<?php else: ?>
    <h1>hello guest</h1>
<?php endif; ?>