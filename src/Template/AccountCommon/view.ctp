<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit').__('AccountCommon'), ['action' => 'edit', $accountCommon->AccountID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete').__('AccountCommon'), ['action' => 'delete', $accountCommon->AccountID], ['confirm' => __('Are you sure you want to delete # {0}?', $accountCommon->AccountID)]) ?> </li>
        <li><?= $this->Html->link(__('List').' '.__('AccountCommon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New').__('AccountCommon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('RoledataList'), ['action' => 'roledata_list', 'id' => $accountCommon->AccountID]); ?></li>
        <li><?= $this->Html->link(__('Monitoring'), ['controller' => 'Account', 'action' => 'edit', $accountCommon['AccountID']], ['escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="account_common view columns">
    <h2><div class="id">ID#<?= h($accountCommon->AccountID) ?></div></h2>
    <div class="row">
        <div class="columns strings">
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('AccountName') ?></div>
                <div class="col-sm-3"><?= h($accountCommon->AccountName) ?></div>
            </div>

            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('ChannelID') ?></div>
                <div class="col-sm-3"><?= h($accountCommon->ChannelID) ?></div>
            </div>

            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('BaiBaoYuanBao') ?></div>
                <div class="col-sm-3"><?= h($accountCommon->BaiBaoYuanBao) ?></div>
            </div>

            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('WareSize') ?></div>
                <div class="col-sm-3"><?= h($accountCommon->WareSize) ?></div>
            </div>

            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('WareSilver') ?></div>
                <div class="col-sm-3"><?= h($accountCommon->WareSilver) ?></div>
            </div>

            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('LastUseRoleID') ?></div>
                <div class="col-sm-3"><?= h($accountCommon->LastUseRoleID) ?></div>
            </div>
    </div>
</div>
