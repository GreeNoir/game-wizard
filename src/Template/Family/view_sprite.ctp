<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Family Sprite'), ['action' => 'edit_sprite', $familySprite->FamilyID]) ?> </li>
        <li><?= $this->Html->link(__('ListOfFamily'), ['action' => 'index']) ?> </li>
    </ul>
</div>
<div class="familySprite view columns">
    <h2>ID#<?= h($familySprite->FamilyID) ?></h2>
    <div class="row">
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Name') ?></div>
            <div class="col-sm-3"><?= h($familySprite->Name) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Level') ?></div>
            <div class="col-sm-3"><?= $familySprite->Level ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Exp') ?></div>
            <div class="col-sm-3"><?= $familySprite->Exp ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('HP') ?></div>
            <div class="col-sm-3"><?= $familySprite->HP ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('EXAttack') ?></div>
            <div class="col-sm-3"><?= $familySprite->EXAttack ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('InAttack') ?></div>
            <div class="col-sm-3"><?= $familySprite->InAttack ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('EXDefense') ?></div>
            <div class="col-sm-3"><?= $familySprite->EXDefense ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('InDefense') ?></div>
            <div class="col-sm-3"><?= $familySprite->InDefense ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('EXAttackDeeper') ?></div>
            <div class="col-sm-3"><?= $familySprite->EXAttackDeeper ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('InAttackDeeper') ?></div>
            <div class="col-sm-3"><?= $familySprite->InAttackDeeper ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('EXAttackResistance') ?></div>
            <div class="col-sm-3"><?= $familySprite->EXAttackResistance ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('InAttackResistance') ?></div>
            <div class="col-sm-3"><?= $familySprite->InAttackResistance ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Toughness') ?></div>
            <div class="col-sm-3"><?= $familySprite->Toughness ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('CritDes') ?></div>
            <div class="col-sm-3"><?= $familySprite->CritDes ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('ControleffectDeepen') ?></div>
            <div class="col-sm-3"><?= $familySprite->ControleffectDeepen ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('ControleffectResistance') ?></div>
            <div class="col-sm-3"><?= $familySprite->ControleffectResistance ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('SlowingeffectDeepen') ?></div>
            <div class="col-sm-3"><?= $familySprite->SlowingeffectDeepen ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('SlowingeffectResistance') ?></div>
            <div class="col-sm-3"><?= $familySprite->SlowingeffectResistance ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('FixedeffectDeepen') ?></div>
            <div class="col-sm-3"><?= $familySprite->FixedeffectDeepen ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('FixedeffectResistance') ?></div>
            <div class="col-sm-3"><?= $familySprite->FixedeffectResistance ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('AgingeffectDeepen') ?></div>
            <div class="col-sm-3"><?= $familySprite->AgingeffectDeepen ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('AgingeffectResistance') ?></div>
            <div class="col-sm-3"><?= $familySprite->AgingeffectResistance ?></div>
        </div>
    </div>
</div>
