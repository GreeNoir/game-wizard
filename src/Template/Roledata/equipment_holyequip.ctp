<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentHolyequip').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('Equipment'), ['action' => 'equipment_list', $id]) ?></li>
    </ul>
</div>
<?php if ($holyequipListCount > 0) { ?>
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th><?= __('SerialNum') ?></th>
            <th><?= __('TypeID') ?></th>
            <th><?= __('Num') ?></th>
            <th><?= __('CostHoly') ?></th>
            <th><?= __('EnhanceCount') ?></th>
            <th><?= __('HolyDmgChg') ?></th>
            <th><?= __('HolyDefChg') ?></th>
            <th><?= __('CritChg') ?></th>
            <th><?= __('HolyCritRateChg') ?></th>
            <th><?= __('ExDamageChg') ?></th>
            <th><?= __('AttackTecChg') ?></th>
            <th><?= __('NeglectToughnessChg') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($holyequipList as $holyequipItem): ?>
        <tr>
            <td><?= $holyequipItem->cSerialNum ?></td>
            <td><?= $holyequipItem->typeID ?></td>
            <td><?= $holyequipItem->num ?></td>
            <td><?= $holyequipItem->CostHoly ?></td>
            <td><?= $holyequipItem->EnhanceCount ?></td>
            <td><?= $holyequipItem->HolyDmgChg ?></td>
            <td><?= $holyequipItem->HolyDefChg ?></td>
            <td><?= $holyequipItem->CritChg ?></td>
            <td><?= $holyequipItem->HolyCritRateChg ?></td>
            <td><?= $holyequipItem->ExDamageChg ?></td>
            <td><?= $holyequipItem->AttackTecChg ?></td>
            <td><?= $holyequipItem->NeglectToughnessChg ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td><?= __('Total') ?>:</td>
            <td colspan="11"><?= $holyequipListCount ?></td>
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