<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New').__('AccountCommon'), ['action' => 'add']) ?></li>
    </ul>
</div>
<?php /*debug($accountCommonList);*/ ?>
<div class="accountcommon table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('AccountID') ?></th>
            <th><?= $this->Paginator->sort('AccountName') ?></th>
            <th><?= __('LastUseRoleID') ?></th>
            <th><?= $this->Paginator->sort('Last IP') ?></th>
            <th><?= $this->Paginator->sort('BaiBaoYuanBao') ?></th>
            <th><?= $this->Paginator->sort('WareSize') ?></th>
            <th><?= $this->Paginator->sort('WareSilver') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($accountCommonList as $accountCommon): ?>
        <tr>
            <td><?= $this->Number->format($accountCommon['AccountID']) ?></td>
            <td><?= h($accountCommon['AccountName']) ?></td>
            <td><?= $accountCommon['LastUseRoleID'] ?></td>
            <td><?= $accountCommon['l']['ip'] ?></td>
            <td><?= $accountCommon['BaiBaoYuanBao'] ?></td>
            <td><?= $accountCommon['WareSize'] ?></td>
            <td><?= $accountCommon['WareSilver'] ?></td>
            <td class="actions">
            </td>
        </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

