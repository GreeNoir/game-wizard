<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentEquip').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('Equipment'), ['action' => 'equipment_list', $id]) ?></li>
    </ul>
</div>
<?php if ($equipListCount > 0) { ?>
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th><?= __('SerialNum') ?></th>
            <th><?= __('TypeID') ?></th>
            <th><?= __('Num') ?></th>
            <th><?= __('Quality') ?></th>
            <th><?= __('MinUseLevel') ?></th>
            <th><?= __('MaxUseLevel') ?></th>
            <th><?= __('WuHun') ?></th>
            <th><?= __('MinDmg') ?></th>
            <th><?= __('MaxDmg') ?></th>
            <th><?= __('Armor') ?></th>
            <th><?= __('PotVal') ?></th>
            <th><?= __('PotValUsed') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($equipList as $equipItem): ?>
        <tr>
            <td><?= $equipItem->cSerialNum ?></td>
            <td><?= $equipItem->typeID ?></td>
            <td><?= $equipItem->num ?></td>
            <td><?= $equipItem->Quality ?></td>
            <td><?= $equipItem->MinUseLevel ?></td>
            <td><?= $equipItem->MaxUseLevel ?></td>
            <td><?= $equipItem->WuHun ?></td>
            <td><?= $equipItem->MinDmg ?></td>
            <td><?= $equipItem->MaxDmg ?></td>
            <td><?= $equipItem->Armor ?></td>
            <td><?= $equipItem->PotVal ?></td>
            <td><?= $equipItem->PotValUsed ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td><?= __('Total') ?>:</td>
            <td colspan="11"><?= $equipListCount ?></td>
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