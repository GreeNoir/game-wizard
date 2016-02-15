<div class="form">
    <?= $this->Form->create($user, ['class' => 'form-horizontal']) ?>

    <legend><?= __('AddUser') ?></legend>
    <?= $this->Form->input('username', ['class' => 'form-control', 'label' => ['text' => __('Username'), 'class' => 'col-sm-2 control-label']]) ?>
    <?= $this->Form->input('password', ['class' => 'form-control', 'label' => ['text' => __('Password'), 'class' => 'col-sm-2 control-label']]) ?>
    <?= $this->Form->input('role', ['options' => ['admin' => __('Admin'), 'view' => __('View')], 'class' => 'form-control', 'label' => ['text' => __('Role'), 'class' => 'col-sm-2 control-label']]) ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= $this->Form->button(__('UserCreate'), ['class' => 'btn btn-primary']); ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>