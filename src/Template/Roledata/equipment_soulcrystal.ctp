<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentSoulcristal').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('Equipment'), ['action' => 'equipment_list', $id]) ?></li>
    </ul>
</div>
<?php if ($soulcrystalListCount > 0) { ?>
<div class="roledata_list table-responsive">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th><?= __('SerialNum') ?></th>
            <th><?= __('TypeID') ?></th>
            <th><?= __('Num') ?></th>
            <th><?= __('SoulLevel') ?></th>
            <th><?= __('SoulQlty') ?></th>
            <th><?= __('SoulSkillID') ?></th>
            <th><?= __('SoulAttID1') ?></th>
            <th><?= __('SoulAttID2') ?></th>
            <th><?= __('SoulAttID3') ?></th>
            <th><?= __('SoulAttID4') ?></th>
            <th><?= __('SoulAttID5') ?></th>
            <th><?= __('SoulAttID6') ?></th>
            <th><?= __('SoulAttID7') ?></th>
            <th><?= __('SoulAttID8') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($soulcrystalList as $soulcrystalItem): ?>
        <tr>
            <td><?= $soulcrystalItem->cSerialNum ?></td>
            <td><?= $soulcrystalItem->typeID ?></td>
            <td><?= $soulcrystalItem->num ?></td>
            <td><?= $soulcrystalItem->SoulLevel ?></td>
            <td><?= $soulcrystalItem->SoulQlty ?></td>
            <td><?= $soulcrystalItem->SoulSkillID ?></td>
            <td><?= $soulcrystalItem->SoulAttID1 ?></td>
            <td><?= $soulcrystalItem->SoulAttID2 ?></td>
            <td><?= $soulcrystalItem->SoulAttID3 ?></td>
            <td><?= $soulcrystalItem->SoulAttID4 ?></td>
            <td><?= $soulcrystalItem->SoulAttID5 ?></td>
            <td><?= $soulcrystalItem->SoulAttID6 ?></td>
            <td><?= $soulcrystalItem->SoulAttID7 ?></td>
            <td><?= $soulcrystalItem->SoulAttID8 ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td><?= __('Total') ?>:</td>
            <td colspan="13"><?= $soulcrystalListCount ?></td>
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