<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('View').__('AccountCommon'), ['action' => 'view', $id]) ?> </li>
        <li><?= $this->Html->link(__('Edit').__('AccountCommon'), ['action' => 'edit', $id]) ?> </li>
        <li><?= $this->Html->link(__('Back').__('ListAccountCommon'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Monitoring'), ['controller' => 'Account', 'action' => 'edit', $id], ['escape' => false]) ?></li>
    </ul>
</div>

<div class="roledata_list table-responsive col-lg-5">
    <h3><?=__('RoledataListHeader').$id ?></h3>
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th>Role ID</th>
            <th>RoleName</th>
            <th class="actions"><?= __('Additionally') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($roledataList as $roledataItem): ?>
        <tr>
            <td>
                <?= $this->Html->link($roledataItem->RoleID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $roledataItem->RoleID]) ?>
            </td>
            <td><?= $roledataItem->RoleName ?></td>
            <td class="actions">
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('View') ?>"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-external-link']),
                    ['controller' => 'Roledata', 'action' => 'view', 'id' => $roledataItem->RoleID],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('Edit') ?>"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['controller' => 'Roledata', 'action' => 'edit', 'id' => $roledataItem->RoleID],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('Equipment') ?>">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-briefcase']),
                    ['controller' => 'Roledata', 'action' => 'equipment_item', 'id' => $roledataItem->RoleID, 'slug' => 'all'],
                    ['escape' => false]); ?>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>