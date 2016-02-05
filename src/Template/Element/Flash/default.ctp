<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>"><?= h($message) ?></div>

<div class="alert alert-info">
    <a class="close" data-dismiss="alert">×</a>
    <div class="<?= h($class) ?>"><?= h($message) ?></div>
</div>