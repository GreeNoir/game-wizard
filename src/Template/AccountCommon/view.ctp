<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Account Common'), ['action' => 'edit', $accountCommon->AccountID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account Common'), ['action' => 'delete', $accountCommon->AccountID], ['confirm' => __('Are you sure you want to delete # {0}?', $accountCommon->AccountID)]) ?> </li>
        <li><?= $this->Html->link(__('List Account Common'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account Common'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="account_common view large-10 medium-9 columns">
    <h2><?= h($accountCommon->AccountName) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('AccountName') ?></h6>
            <p><?= h($accountCommon->AccountName) ?></p>

            <h6 class="subheader"><?= __('BaiBaoYuanBao') ?></h6>
            <p><?= h($accountCommon->BaiBaoYuanBao) ?></p>

            <h6 class="subheader"><?= __('WareSize') ?></h6>
            <p><?= h($accountCommon->WareSize) ?></p>

            <h6 class="subheader"><?= __('WareSilver') ?></h6>
            <p><?= h($accountCommon->WareSilver) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($accountCommon->AccountID) ?></p>
        </div>
    </div>
</div>
