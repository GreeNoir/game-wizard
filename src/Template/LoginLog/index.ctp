<div class="col-md-8 actions">
    <div class="login_log_form well">
        <h4><?= __('Please select an account to see the login log') ?></h4>
        <?= $this->Form->create('', ['type' => 'get', 'action' => 'accountLog', 'class' => 'form-inline']) ?>
        <?= $this->Form->select('accountID', $accountCommonList, ['class' => 'form-control']) ?>
        <?= $this->Form->button($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-search']), ['class' => 'btn btn-fab']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
