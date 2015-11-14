<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentHolyman').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('Equipment'), ['action' => 'equipment_list', $id]) ?></li>
    </ul>
</div>
<?php if ($holymanListCount > 0) { ?>
<div class="roledata_list table-responsive">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th><?= __('SerialNum') ?></th>
            <th><?= __('TypeID') ?></th>
            <th><?= __('Num') ?></th>
            <th><?= __('DevourNum') ?></th>
            <th><?= __('EquipmentNumber') ?></th>
            <th><?= __('ToDayDevourNum') ?></th>
            <th><?= __('EquipSerialIDs') ?></th>
            <th><?= __('CostHoly') ?></th>
            <th><?= __('CoValue') ?></th>
            <th><?= __('HolyDmg') ?></th>
            <th><?= __('HolyDef') ?></th>
            <th><?= __('Crit') ?></th>
            <th><?= __('HolyCritRate') ?></th>
            <th><?= __('ExDamage') ?></th>
            <th><?= __('AttackTec') ?></th>
            <th><?= __('NeglectToughness') ?></th>
            <th><?= __('HolyValue') ?></th>
            <th><?= __('MaxDevourNum') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($holymanList as $holymanItem): ?>
        <tr>
            <td><?= $holymanItem->cSerialNum ?></td>
            <td><?= $holymanItem->typeID ?></td>
            <td><?= $holymanItem->num ?></td>
            <td><?= $holymanItem->CostHoly ?></td>
            <td><?= $holymanItem->EnhanceCount ?></td>
            <td><?= $holymanItem->HolyDmgChg ?></td>
            <td><?= $holymanItem->HolyDefChg ?></td>
            <td><?= $holymanItem->CritChg ?></td>
            <td><?= $holymanItem->HolyCritRateChg ?></td>
            <td><?= $holymanItem->ExDamageChg ?></td>
            <td><?= $holymanItem->AttackTecChg ?></td>
            <td><?= $holymanItem->NeglectToughnessChg ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td><?= __('Total') ?>:</td>
            <td colspan="11"><?= $holymanListCount ?></td>
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