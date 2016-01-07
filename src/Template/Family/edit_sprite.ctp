<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('ListOfFamily'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="familySprite form">
    <?= $this->Form->create($familySprite) ?>
    <legend><?= __('Edit Family Sprite') ?><div class="id">ID#<?= $familySprite->FamilyID ?></div></legend>

    <?= $this->Form->input('Level', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('Exp', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('Name', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('HP', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('EXAttack', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('InAttack', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('EXDefense', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('InDefense', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('EXAttackDeeper', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('InAttackDeeper', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('EXAttackResistance', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('InAttackResistance', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('Toughness', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('CritDes', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('ControleffectDeepen', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('ControleffectResistance', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('SlowingeffectDeepen', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('SlowingeffectResistance', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('FixedeffectDeepen', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('FixedeffectResistance', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('AgingeffectDeepen', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>
    <?= $this->Form->input('AgingeffectResistance', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]); ?>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10 voofset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
