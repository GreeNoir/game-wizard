<div class="form">
    <legend><?= __('Please input the serial number to find') ?></legend>
    <?= $this->Form->create('', ['type' => 'get', 'action' => 'find']) ?>
    <?= $this->Form->input('serialNum', ['label' => '', 'type' => 'text']) ?>
    <div class="col-sm-10">
        <?= $this->Form->button(__('Find'), ['class' => 'btn btn-link']); ?>
    </div>
    <?= $this->Form->end() ?>
</div>
