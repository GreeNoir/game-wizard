
<div class="form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create('User', ['autocomplete' => 'off', 'class' => 'form-horizontal']) ?>
    <legend><?= __('Please login'); ?></legend>

    <?= $this->Form->input('username', ['autocomplete' => 'off', 'class' => 'form-control', 'label' => ['text' => __('Username'), 'class' => 'col-sm-2 control-label']]) ?>
    <?= $this->Form->input('password', ['class' => 'form-control', 'label' => ['text' => __('Password'), 'class' => 'col-sm-2 control-label']]) ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= $this->Form->button(__('Login'), ['class' => 'btn btn-success']); ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
