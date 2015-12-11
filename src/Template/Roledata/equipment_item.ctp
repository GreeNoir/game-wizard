<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentItem').$id ?></h3>
    <h4><?=__('AccountName').' - '.$accountName ?></h4>
    <h4><?=__('RoleName').' - '.$roleName ?></h4>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('View').__('Roledata'), ['action' => 'view', $id]) ?></li>
        <li><?= $this->Html->link(__('View').__('AccountCommon'), ['controller' => 'AccountCommon', 'action' => 'view', $accountID]) ?></li>
        <li><?= $this->Html->link(__('Back').__('RoledataList'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-striped equip">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('SerialNum') ?></th>
            <th><?= $this->Paginator->sort('TypeID') ?></th>
            <th><?= $this->Paginator->sort('Num') ?></th>
            <th>
                <form id="equipment_item" method="post">
                    <input type="hidden" name="subaction">
                    <select id="equipType" name="equipType">
                        <option value="all" selected="selected"><?= __('EquipType') ?></option>
                        <?php foreach($equipTypes as $type) { ?>
                        <option value="<?= $type ?>" <?php if($type==$selectedEquipType) { echo 'selected="selected"';} ?>><?= $type ?></option>
                        <?php } ?>
                    </select>
                    <div class="sort_container">
                        <?php if ($hiddenDirection == 'desc') {
                                echo $this->Paginator->sort('EquipType',
                                    '<div class="pointer"><i class="fa fa-sort-alpha-asc"></i></div>',
                                    ['escape' => false, 'direction' => 'asc']);
                            } else {
                                echo $this->Paginator->sort('EquipType',
                                    '<div class="pointer"><i class="fa fa-sort-alpha-desc"></i></div>',
                                    ['escape' => false, 'direction' => 'desc']);
                            }
                        ?>
                    </div>
                </form>
            </th>
            <th><?= __('Name') ?></th>
            <th><?= __('Bind') ?></th>
            <th><?= __('Create Time') ?></th>
            <th><?= __('Delete Time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <?php if ($itemListCount > 0) { ?>
            <tbody>
            <?php foreach ($itemList as $item): ?>
            <tr>
                <td><?= $item->cSerialNum ?></td>
                <td><?= $item->TypeID ?></td>
                <td><?= $item->Num ?></td>
                <td>
                    <?php
                        if (!isset($item->EquipType)) {
                            echo $this->Html->link(__($selectedEquipType), ['action' => 'edit_equipment', '?' => ['type' => $selectedEquipType, 'serial' => $item->cSerialNum, 'roleID' => $id]]);
                        } else {
                            if($item->EquipType == 'undefined') {
                                echo '';
                            } else {
                                echo $this->Html->link(__($item->EquipType), ['action' => 'edit_equipment', '?' => ['type' => $item->EquipType, 'serial' => $item->cSerialNum, 'roleID' => $id]]);
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
                         'data' => ['serial' => $item->cSerialNum, 'typeid' => $item->TypeID, 'roleid' => $id, 'type' => $item->EquipType, 'base' => 'item'],
                         'confirm' => __('Are you sure you want to delete item # {0}?', $item->cSerialNum)
                        ]) ?>
                    </div>
                    <div class="action" data-toggle="tooltip" title="<?= __('copy_item') ?>">
                        <a href="javascript:void(0);" class="copy_item" data-original-roleid="<?= $id ?>" data-serial="<?= $item->cSerialNum ?>" data-typeid="<?= $item->TypeID ?>" data-toggle="modal" data-target="#equip_add"><i class="fa fa-plus-circle"></i></a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        <?php } ?>
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

<?= $this->element('Roledata/equipment_add_dialog'); ?>

<?= $this->Html->scriptBlock('

    initEquipment('.$roledataAccountsList.');

') ?>