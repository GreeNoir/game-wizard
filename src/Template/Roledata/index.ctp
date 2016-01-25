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
            <th class="ids"><?= $this->Paginator->sort('RoleID', 'RoleID') ?></th>
            <th><?= $this->Paginator->sort('RoleName') ?></th>
            <th class="ids"><?= $this->Paginator->sort('AccountID', 'AccountID') ?></th>
            <th><?= $this->Paginator->sort('account_common.AccountName', 'AccountName') ?></th>
            <th><?= $this->Paginator->sort('FamilyName') ?></th>
            <th class="ids"><?= $this->Paginator->sort('GuildID') ?></th>
            <th><?= $this->Paginator->sort('Sex') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($roledata as $roledata): ?>
        <tr>
            <td class="ids"><?= $this->Number->format($roledata->RoleID) ?></td>
            <td><?= h($roledata->RoleName) ?></td>
            <td class="ids">
                <?php
                    $accountID = $this->Number->format($roledata->AccountID);
                echo $this->Html->link($accountID, ['controller' => 'AccountCommon', 'action' => 'view', 'id' => $accountID]);
                ?>
            </td>
            <td><?= $roledata->AccountName ?></td>
            <td><?php
                if ($roledata->FamilyName != 'undefined') {
                    echo $this->Html->link($roledata->FamilyName, ['controller' => 'Family', 'action' => 'view', 'id' => $roledata->FamilyID]);
                } else {
                    echo '';
                } ?>
            </td>
            <td class="ids"><?= $roledata->GuildID ? $this->Html->link($roledata->GuildID, ['controller' => 'Guild', 'action' => 'view', $roledata->GuildID]) : '' ?>
            </td>
            <td><?php
                if ($roledata->Sex == 0) echo __('Woman');
                else { echo __('Man'); } ?>
            </td>
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
                        ['action' => 'equipment_item', 'id' => $roledata->RoleID, 'slug' => 'all'],
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
