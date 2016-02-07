<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $accountCommon->AccountID],
            ['confirm' => __('Are you sure you want to delete # {0}?', $accountCommon->AccountID)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List').' '.__('AccountCommon'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('RoledataList'), ['action' => 'roledata_list', 'id' => $accountCommon->AccountID]); ?></li>
        <li><?= $this->Html->link(__('Monitoring'), ['controller' => 'Account', 'action' => 'edit', $accountCommon['AccountID']], ['escape' => false]) ?></li>
    </ul>
</div>
<div class="col-md-6">
    <div class="account_common form well">
        <?= $this->Form->create($accountCommon, ['class' => 'form-horizontal']) ?>

        <legend><?= __('Edit Account Common') ?><div class="id"><?= $accountCommon->AccountName ?></div></legend>
        <?= $this->Form->input('AccountID', ['type' => 'text', 'disabled' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('AccountName', ['required' => true, 'label' => ['class' => 'col-md-3 control-label'], 'size' => 36]); ?>
        <?= $this->Form->input('ChannelID', ['type' => 'text', 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('BaiBaoYuanBao', ['label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('WareSize', ['label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('WareSilver', ['label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('LastUseRoleID', ['type' => 'text', 'disabled' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>

        <div class="form-group">
            <div class="col-md-offset-3 col-md-10 voofset10">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
