<div class="actions columns large-2 medium-3">
    <h3><?=__('FamilyMemberList').$familyID ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('ListOfFamily'), ['action' => 'index']) ?></li>
    </ul>
</div>
<?php if ($membersCount > 0): ?>
<div class="members table-responsive col-lg-5">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th>Role ID</th>
            <th>RoleName</th>
            <th class="actions"><?= __('Additionally') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($membersList as $memberItem): ?>
        <tr>
            <td>
                <?= $this->Html->link($memberItem->RoleID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $memberItem->RoleID]) ?>
            </td>
            <td><?= $memberItem->roledata->RoleName ?></td>
            <td class="actions">
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('View') ?>"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-external-link']),
                    ['controller' => 'Roledata', 'action' => 'view', 'id' => $memberItem->RoleID],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('Edit') ?>"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['controller' => 'Roledata', 'action' => 'edit', 'id' => $memberItem->RoleID],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('Equipment') ?>">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-briefcase']),
                    ['controller' => 'Roledata', 'action' => 'equipment_item', 'id' => $memberItem->RoleID],
                    ['escape' => false]); ?>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php else: ?>
<div>No records found</div>
<?php endif; ?>