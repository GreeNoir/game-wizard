<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipment').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Item'), ['action' => 'equipment_item', $id]) ?></li>
        <li><?= $this->Html->link(__('Equip'), ['action' => 'equipment_equip', $id]) ?></li>
        <li><?= $this->Html->link(__('Holyequip'), ['action' => 'equipment_holyequip', $id]) ?></li>
        <li><?= $this->Html->link(__('Holyman'), ['action' => 'equipment_holyman', $id]) ?></li>
        <li><?= $this->Html->link(__('Soulcrystal'), ['action' => 'equipment_soulcrystal', $id]) ?></li>
        <li><?= $this->Html->link(__('Back').__('RoledataList'), ['action' => 'index']) ?></li>
    </ul>
</div>