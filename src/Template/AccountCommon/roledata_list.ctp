<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListHeader').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('View').__('AccountCommon'), ['action' => 'view', $id]) ?> </li>
        <li><?= $this->Html->link(__('Edit').__('AccountCommon'), ['action' => 'edit', $id]) ?> </li>
        <li><?= $this->Html->link(__('Back').__('ListAccountCommon'), ['action' => 'index']) ?></li>
    </ul>
</div>

<div class="roledata_list table-responsive">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th>Role ID</th>
            <th>RoleName</th>
            <th>RoleNameCrc</th>
            <th>Sex</th>
            <th>SpeakOff</th>
            <th>HairModelID</th>
            <th>X</th>
            <th>Y</th>
            <th>Z</th>
            <th><?= __('Additionally') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($roledataList as $roledataItem): ?>
        <tr>
            <td>
                <?= $this->Html->link($roledataItem->RoleID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $roledataItem->RoleID]) ?>
            </td>
            <td><?= $roledataItem->RoleName ?></td>
            <td><?= $roledataItem->RoleNameCrc ?></td>
            <td><?= $roledataItem->Sex ?></td>
            <td><?= $this->Number->format($roledataItem->SpeakOff) ?></td>
            <td><?= $this->Number->format($roledataItem->HairModelID) ?></td>
            <td><?= $this->Number->format($roledataItem->X) ?></td>
            <td><?= $this->Number->format($roledataItem->Y) ?></td>
            <td><?= $this->Number->format($roledataItem->Z) ?></td>
            <td>
                <div class="icon-contain"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-external-link']).$this->Html->tag('div', __('View')),
                    ['controller' => 'Roledata', 'action' => 'view', 'id' => $roledataItem->RoleID],
                    ['escape' => false]) ?></div>
                <div class="icon-contain"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']).$this->Html->tag('div', __('Edit')),
                    ['controller' => 'Roledata', 'action' => 'edit', 'id' => $roledataItem->RoleID],
                    ['escape' => false]) ?></div>
                <div class="icon-contain">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-briefcase']).$this->Html->tag('div', __('Equipment')),
                    ['controller' => 'Roledata', 'action' => 'equipment_item', 'id' => $roledataItem->RoleID],
                    ['escape' => false]); ?>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>