<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New AccountCommon'), ['action' => 'add']) ?></li>
    </ul>
</div>

<div class="accountcommon index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('AccountID') ?></th>
            <th><?= $this->Paginator->sort('AccountName') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($accountCommonList as $accountCommon): ?>
        <tr>
            <td><?= $this->Number->format($accountCommon->AccountID) ?></td>
            <td><?= h($accountCommon->AccountName) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View', true), ['action' => 'view', $accountCommon->AccountID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountCommon->AccountID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountCommon->AccountID], ['confirm' => __('Are you sure you want to delete # {0}?', $accountCommon->AccountID)]) ?>
                <?= $this->Html->link(__('RoledataList'), ['action' => 'roledata_list', $accountCommon->AccountID]) ?>
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

