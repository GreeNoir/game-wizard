<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentItem').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('View').__('Roledata'), ['action' => 'view', $id]) ?></li>
        <li><?= $this->Html->link(__('Back').__('RoledataList'), ['action' => 'index']) ?></li>
    </ul>
</div>
<?php if ($itemListCount > 0) { ?>
<form id="equipment_item" method="post">
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-striped equip">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('SerialNum') ?></th>
            <th><?= $this->Paginator->sort('TypeID') ?></th>
            <th><?= $this->Paginator->sort('Num') ?></th>
            <th>
                <select id="equipType" name="equipType">
                    <option value="all" selected="selected"><?= __('EquipType') ?></option>
                    <?php foreach($equipTypes as $type) { ?>
                        <option value="<?= $type ?>" <?php if($type==$selectedEquipType) { echo 'selected="selected"';} ?>><?= $type ?></option>
                    <?php } ?>
                </select>
            </th>
            <th><?= __('Name') ?></th>
            <th><?= __('Bind') ?></th>
            <th><?= __('Create Time') ?></th>
            <th><?= __('Delete Time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($itemList as $item): ?>
        <tr>
            <td><?= $item->cSerialNum ?></td>
            <td><?= $item->TypeID ?></td>
            <td><?= $item->Num ?></td>
            <td>
                <?php
                    if (!isset($item->EquipType)) {
                        echo $this->Html->link(__($selectedEquipType), ['action' => 'view_equip', '?' => ['type' => $selectedEquipType, 'serial' => $item->cSerialNum]]);
                    } else {
                        if($item->EquipType == 'undefined') {
                            echo '';
                        } else {
                            echo $this->Html->link(__($item->EquipType), ['action' => 'view_equip', '?' => ['type' => $item->EquipType, 'serial' => $item->cSerialNum]]);
                        }
                    }
                ?>
            </td>
            <td><?= $item->Name ?></td>
            <td><?= $item->Bind ?></td>
            <td><?= $item->CreateTime ?></td>
            <td><?= $item->del_time ?></td>
            <td class="actions">
                <div class="action" data-toggle="tooltip" title="<?= __('delete_item') ?>">
                    <?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-minus-circle']),
                    ['action' => 'del_equip'],
                    ['escape' => false,
                    'data' => ['serial' => $item->cSerialNum, 'typeid' => $item->TypeID, 'roleid' => $id, 'base' => 'item']]) ?>
                </div>
                <div class="action" data-toggle="tooltip" title="<?= __('copy_item') ?>">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-plus-circle']),
                    ['action' => 'edit_equip'],
                    ['escape' => false]) ?>
                </div>
                <div class="action" data-toggle="tooltip" title="<?= __('edit_item') ?>">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['action' => 'edit_equip'],
                    ['escape' => false]) ?>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td><?= __('Total') ?>:</td>
            <td colspan="8"><?= $itemListCount ?></td>
        </tr>
        </tfoot>
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
</form>
<?php } else { ?>
<div><?= __('No results') ?></div>
<?php } ?>