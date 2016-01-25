<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('EquipmentOfRoleID').' '.$roleID, ['action' => 'equipment_item', 'id' => $roleID, 'slug' => 'all']) ?></li>
    </ul>
</div>
<div class="equipment form">

    <legend><?= __('Edit equipment ').$type ?> #<?= $serial ?></legend>

    <?php
        echo $this->Form->create($oEquip, ['class' => 'form-horizontal']);
        foreach($aEquip as $field=>$value) {
            $options = ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']];
            if ($field == 'cSerialNum') {
                $options['disabled'] = true;
            }
            echo $this->Form->input($field, $options);
        }
     ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 voofset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>