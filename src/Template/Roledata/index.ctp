<div class="actions">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New').__('Roledata'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="roledata table-responsive">
    <table class="table table-condensed table-bordered table-striped">
    <thead>
        <tr>
            <th class="ids"><?= $this->Paginator->sort('AccountID', 'AccountID') ?></th>
            <th class="ids"><?= $this->Paginator->sort('RoleID', 'RoleID') ?></th>
            <th><?= $this->Paginator->sort('RoleName') ?></th>
            <th><?= $this->Paginator->sort('RoleNameCrc') ?></th>
            <th class="ids"><?= $this->Paginator->sort('Sex') ?></th>
            <th class="ids"><?= $this->Paginator->sort('SpeakOff') ?></th>
            <th class="ids"><?= $this->Paginator->sort('HairModelID') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($roledata as $roledata): ?>
        <tr>
            <td class="ids">
                <?php
                    $accountID = $this->Number->format($roledata->AccountID);
                    echo $this->Html->link($accountID, ['controller' => 'AccountCommon', 'action' => 'view', 'id' => $accountID]);
                ?>
            </td>
            <td class="ids"><?= $this->Number->format($roledata->RoleID) ?></td>
            <td><?= h($roledata->RoleName) ?></td>
            <td><?= $this->Number->format($roledata->RoleNameCrc) ?></td>
            <td class="ids"><?= $this->Number->format($roledata->Sex) ?></td>
            <td class="ids"><?= $this->Number->format($roledata->SpeakOff) ?></td>
            <td class="ids"><?= $this->Number->format($roledata->HairModelID) ?></td>
            <td class="actions">
                <div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-external-link']).$this->Html->tag('div', __('View')),
                        ['action' => 'view', 'id' => $roledata->RoleID],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-pencil']).$this->Html->tag('div', __('Edit')),
                        ['action' => 'edit', 'id' => $roledata->RoleID],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Form->postLink(
                        $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']).$this->Html->tag('div', __('Delete')),
                        ['action' => 'delete', $roledata->RoleID],
                        ['escape' => false,
                         'confirm' => __('Are you sure you want to delete # {0}?', $roledata->RoleID)
                        ]) ?></div>
                    <div class="icon-contain">
                        <?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-briefcase']).$this->Html->tag('div', __('Equipment')),
                        ['action' => 'equipment_item', 'id' => $roledata->RoleID],
                        ['escape' => false]); ?></div>
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
