<div class="form">
    <legend><?= __('Please select an account to see the login log') ?></legend>
    <?= $this->Form->create('', ['type' => 'get', 'action' => 'accountLog']) ?>
    <?= $this->Form->select('accountID', $accountCommonList) ?>
    <?= $this->Form->button(__('Show'), ['class' => 'btn btn-link']); ?>
    <?= $this->Form->end() ?>
</div>

