<div class="form">
    <legend><?= __('Please input the serial number to find') ?></legend>
    <?= $this->Form->create('', ['type' => 'get', 'action' => 'find', 'class' => 'form-inline']) ?>
    <?= $this->Form->input('serialNum', ['label' => '', 'type' => 'text', 'class' => 'form-control']) ?>
    <?= $this->Form->button(__('Find'), ['class' => 'btn btn-primary']); ?>
    <?= $this->Form->end() ?>
</div>
