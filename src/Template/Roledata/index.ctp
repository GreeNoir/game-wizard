<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New').__('Roledata'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="roledata index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('AccountID') ?></th>
            <th><?= $this->Paginator->sort('RoleID') ?></th>
            <th><?= $this->Paginator->sort('RoleName') ?></th>
            <th><?= $this->Paginator->sort('RoleNameCrc') ?></th>
            <th><?= $this->Paginator->sort('Sex') ?></th>
            <th><?= $this->Paginator->sort('SpeakOff') ?></th>
            <th><?= $this->Paginator->sort('HairModelID') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($roledata as $roledata): ?>
        <tr>
            <td><?= $this->Number->format($roledata->AccountID) ?></td>
            <td><?= $this->Number->format($roledata->RoleID) ?></td>
            <td><?= h($roledata->RoleName) ?></td>
            <td><?= $this->Number->format($roledata->RoleNameCrc) ?></td>
            <td><?= $this->Number->format($roledata->Sex) ?></td>
            <td><?= $this->Number->format($roledata->SpeakOff) ?></td>
            <td><?= $this->Number->format($roledata->HairModelID) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', 'id' => $roledata->RoleID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', 'id' => $roledata->RoleID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roledata->RoleID], ['confirm' => __('Are you sure you want to delete # {0}?', $roledata->RoleID)]) ?>
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
