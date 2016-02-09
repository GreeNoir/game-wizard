<div class="form">
    <legend><?= __('Please input the serial number to find') ?></legend>
    <?= $this->Form->create('', ['class' => 'form-inline']) ?>
    <?= $this->Form->input('serialNum', ['label' => '', 'type' => 'text', 'id' => 'serialNum', 'size' => '50', 'placeholder' => __('Search')]) ?>
    <?= $this->Form->button(__('Find'), ['class' => 'btn btn-link', 'onclick' => 'findOwners();']); ?>
    <div class="find_progress"><i class="fa fa-spinner fa-spin"></i></div>
    <?= $this->Form->end() ?>
</div>
<div id="find_results"></div>
