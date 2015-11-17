<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentHolyman').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('Equipment'), ['action' => 'equipment_list', $id]) ?></li>
    </ul>
</div>
<?php if ($holymanListCount > 0) { ?>
<div class="roledata_list table-responsive">
    <table class="table table-condensed table-bordered table-striped equip">
        <thead>
        <tr>
            <th><?= __('SerialNum') ?></th>
            <th><?= __('TypeID') ?></th>
            <th><?= __('Num') ?></th>
            <th><?= __('DevourNum') ?></th>
            <th><?= __('EquipmentNumber') ?></th>
            <th><?= __('EquipSerialIDs') ?></th>
            <th><?= __('CostHoly') ?></th>
            <th><?= __('CoValue') ?></th>
            <th><?= __('HolyDmg') ?></th>
            <th><?= __('HolyDef') ?></th>
            <th><?= __('Crit') ?></th>
            <th><?= __('HolyValue') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($holymanList as $holymanItem): ?>
        <tr>
            <td><?= $holymanItem->cSerialNum ?></td>
            <td><?= $holymanItem->typeID ?></td>
            <td><?= $holymanItem->num ?></td>
            <td><?= $holymanItem->DevourNum ?></td>
            <td><?= $holymanItem->EquipmentNumber ?></td>
            <td><?= $holymanItem->EquipSerialIDs ?></td>
            <td><?= $holymanItem->Costdoly ?></td>
            <td><?= $holymanItem->CoValue ?></td>
            <td><?= $holymanItem->HolyDmg ?></td>
            <td><?= $holymanItem->HolyDef ?></td>
            <td><?= $holymanItem->Crit ?></td>
            <td><?= $holymanItem->HolyValue ?></td>
            <td><?= $holymanItem->Name ?></td>
            <td class="actions">
                <div class="action">
                    <?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-minus-circle']),
                    ['action' => 'del_equip'],
                    ['escape' => false,
                    'data' => ['serial' => $holymanItem->cSerialNum, 'typeid' => $holymanItem->typeID, 'roleid' => $id, 'base' => 'holyman']]) ?>
                </div>
                <div class="action">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-plus-circle']),
                    ['action' => 'edit_equip'],
                    ['escape' => false]) ?>
                </div>
                <div class="action">
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
            <td colspan="13"><?= $holymanListCount ?></td>
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
<?php } else { ?>
<div><?= __('No results') ?></div>
<?php } ?>