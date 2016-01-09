<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Commerce Rank'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="commerceRank index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('role_id') ?></th>
            <th><?= $this->Paginator->sort('guild_id') ?></th>
            <th><?= $this->Paginator->sort('times') ?></th>
            <th><?= $this->Paginator->sort('tael') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($commerceRank as $commerceRank): ?>
        <tr>
            <td><?= $this->Number->format($commerceRank->role_id) ?></td>
            <td><?= $this->Number->format($commerceRank->guild_id) ?></td>
            <td><?= $this->Number->format($commerceRank->times) ?></td>
            <td><?= $this->Number->format($commerceRank->tael) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $commerceRank->role_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commerceRank->role_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commerceRank->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)]) ?>
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
