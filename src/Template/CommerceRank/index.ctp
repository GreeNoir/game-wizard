<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Commerce Rank'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="commerceRank table-responsive col-lg-6">
    <table class="table table-condensed table-bordered table-striped">
    <thead>
        <tr>
            <th class="ids"><?= $this->Paginator->sort('role_id') ?></th>
            <th class="ids"><?= $this->Paginator->sort('guild_id') ?></th>
            <th class="ids"><?= $this->Paginator->sort('times') ?></th>
            <th class="ids"><?= $this->Paginator->sort('tael') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($commerceRank as $commerceRank): ?>
        <tr>
            <td class="ids"><?= $commerceRank->role_id ?></td>
            <td class="ids"><?= $commerceRank->guild_id ?></td>
            <td class="ids"><?= $commerceRank->times ?></td>
            <td class="ids"><?= $commerceRank->tael ?></td>
            <td class="actions">
                <div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-external-link']).$this->Html->tag('div', __('View')),
                        ['action' => 'view', 'id' => $commerceRank->role_id],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-pencil']).$this->Html->tag('div', __('Edit')),
                        ['action' => 'edit', 'id' => $commerceRank->role_id],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Form->postLink(
                        $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']).$this->Html->tag('div', __('Delete')),
                        ['action' => 'delete', $commerceRank->role_id],
                        ['escape' => false,
                        'confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)
                        ]) ?></div>
                </div>
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
