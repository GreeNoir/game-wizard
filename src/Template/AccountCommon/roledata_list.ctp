<div class="actions columns large-2 medium-3">
    <h4><?=__('RoledataListHeader').$id ?></h4>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('ListAccountCommon'), ['action' => 'index']) ?></li>
    </ul>
</div>

<div class="index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th>Role ID</th>
            <th>Role Name</th>
            <th>Sex</th>
            <th>Map ID</th>
            <th>X</th>
            <th>Y</th>
            <th>Z</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($roledataList as $roledataItem): ?>
        <tr>
            <td>
                <?= $this->Html->link($roledataItem->RoleID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $roledataItem->RoleID]) ?>
            </td>
            <td><?= $roledataItem->RoleName ?></td>
            <td><?= $roledataItem->Sex ?></td>
            <td><?= $roledataItem->MapID ?></td>
            <td><?= $roledataItem->X ?></td>
            <td><?= $roledataItem->Y ?></td>
            <td><?= $roledataItem->Z ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>