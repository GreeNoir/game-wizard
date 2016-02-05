<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('ListFamily'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View'), ['action' => 'view', 'id' => $familyID]) ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', 'id' => $familyID]) ?></li>
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $familyID],
            ['confirm' => __('Are you sure you want to delete # {0}?', $familyID)]
            )
            ?></li>
        <li><?= $this->Html->link(__('Sprite'), ['action' => 'view_sprite', 'id' => $familyID]) ?></li>
        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#member_add"><?= __('AddMember') ?></a></li>
    </ul>
</div>
<?php if ($membersCount > 0): ?>
<div class="members table-responsive col-lg-6">
    <h3><?=__('FamilyMemberList').' #ID'.$familyID ?></h3>
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th>Role ID</th>
            <th>RoleName</th>
            <th class="actions"><?= __('Additionally') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
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
                    ['controller' => 'Roledata', 'action' => 'equipment_item', 'id' => $memberItem->RoleID, 'slug' => 'all'],
                    ['escape' => false]); ?>
                </div>
            </td>
            <td class="actions">
                <div class="action" data-toggle="tooltip" title="<?= __('delete_member') ?>">
                    <?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-minus-circle']),
                    ['action' => 'del_member'],
                    ['escape' => false,
                    'data' => ['roleID' => $memberItem->RoleID, 'familyID' => $memberItem->FamilyID],
                    'confirm' => __('Are you sure you want to delete member #{0} from this family?', $memberItem->RoleID)
                    ]) ?>
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

<?= $this->element('Family/member_add_dialog'); ?>