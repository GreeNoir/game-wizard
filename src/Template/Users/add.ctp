<div class="main">
    <div class="users form">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('AddUser') ?></legend>
            <?= $this->Form->input('username') ?>
            <?= $this->Form->input('password') ?>
            <?= $this->Form->input('role', ['options' => ['admin' => __('Admin'), 'view' => __('View')] ]) ?>
        </fieldset>
        <div class="button_block">
            <?= $this->Form->button(__('UserCreate')); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>