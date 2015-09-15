<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit').__('AccountCommon'), ['action' => 'edit', $accountCommon->AccountID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete').__('AccountCommon'), ['action' => 'delete', $accountCommon->AccountID], ['confirm' => __('Are you sure you want to delete # {0}?', $accountCommon->AccountID)]) ?> </li>
        <li><?= $this->Html->link(__('List').' '.__('AccountCommon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New').__('AccountCommon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('RoledataList'), ['action' => 'roledata_list', 'id' => $accountCommon->AccountID]); ?></li>
    </ul>
</div>
<div class="account_common view large-10 medium-9 columns">
    <h2><?= h($accountCommon->AccountID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('AccountName') ?></h6>
            <p><?= h($accountCommon->AccountName) ?></p>

            <h6 class="subheader"><?= __('ChannelID') ?></h6>
            <p><?= h($accountCommon->ChannelID) ?></p>

            <h6 class="subheader"><?= __('BaiBaoYuanBao') ?></h6>
            <p><?= h($accountCommon->BaiBaoYuanBao) ?></p>

            <h6 class="subheader"><?= __('WareSize') ?></h6>
            <p><?= h($accountCommon->WareSize) ?></p>

            <h6 class="subheader"><?= __('WareSilver') ?></h6>
            <p><?= h($accountCommon->WareSilver) ?></p>

            <h6 class="subheader"><?= __('LastUseRoleID') ?></h6>
            <p><?= h($accountCommon->LastUseRoleID) ?></p>
        </div>
    </div>
</div>
