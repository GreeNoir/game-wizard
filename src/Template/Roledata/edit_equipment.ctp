<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('EquipmentOfRoleID').' '.$roleID, ['action' => 'equipment_item', 'id' => $roleID, 'slug' => 'all']) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="equipment form well">

        <legend><?= __('Edit equipment ').$type ?> #<?= $serial ?></legend>

        <?php
            echo $this->Form->create($oEquip, ['class' => 'form-horizontal']);
            foreach($aEquip as $field=>$value) {
                $options = ['label' => ['class' => 'col-md-3 control-label']];
                if ($field == 'cSerialNum') {
                    $options['disabled'] = true;
                }
                echo $this->Form->input($field, $options);
            }
         ?>
        <div class="form-group">
            <div class="col-md-offset-3">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>