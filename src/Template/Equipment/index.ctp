<div class="form">
    <legend><?= __('Please input the serial number to find') ?></legend>
    <?= $this->Form->create('', ['class' => 'form-inline']) ?>
    <?= $this->Form->input('serialNum', ['label' => '', 'type' => 'text', 'class' => 'form-control', 'id' => 'serialNum']) ?>
    <?= $this->Form->button(__('Find'), ['class' => 'btn btn-primary', 'type' => 'button', 'onclick' => 'findOwners();']); ?>
    <?= $this->Form->end() ?>
</div>
<div id="find_result"></div>
