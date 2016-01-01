<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Family Sprite'), ['action' => 'edit_sprite', $familySprite->FamilyID]) ?> </li>
        <li><?= $this->Html->link(__('ListOfFamily'), ['action' => 'index']) ?> </li>
    </ul>
</div>
<div class="familySprite view large-10 medium-9 columns">
    <h2><?= h($familySprite->FamilyID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($familySprite->Name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('FamilyID') ?></h6>
            <p><?= $this->Number->format($familySprite->FamilyID) ?></p>
            <h6 class="subheader"><?= __('Level') ?></h6>
            <p><?= $this->Number->format($familySprite->Level) ?></p>
            <h6 class="subheader"><?= __('Exp') ?></h6>
            <p><?= $this->Number->format($familySprite->Exp) ?></p>
            <h6 class="subheader"><?= __('HP') ?></h6>
            <p><?= $this->Number->format($familySprite->HP) ?></p>
            <h6 class="subheader"><?= __('EXAttack') ?></h6>
            <p><?= $this->Number->format($familySprite->EXAttack) ?></p>
            <h6 class="subheader"><?= __('InAttack') ?></h6>
            <p><?= $this->Number->format($familySprite->InAttack) ?></p>
            <h6 class="subheader"><?= __('EXDefense') ?></h6>
            <p><?= $this->Number->format($familySprite->EXDefense) ?></p>
            <h6 class="subheader"><?= __('InDefense') ?></h6>
            <p><?= $this->Number->format($familySprite->InDefense) ?></p>
            <h6 class="subheader"><?= __('EXAttackDeeper') ?></h6>
            <p><?= $this->Number->format($familySprite->EXAttackDeeper) ?></p>
            <h6 class="subheader"><?= __('InAttackDeeper') ?></h6>
            <p><?= $this->Number->format($familySprite->InAttackDeeper) ?></p>
            <h6 class="subheader"><?= __('EXAttackResistance') ?></h6>
            <p><?= $this->Number->format($familySprite->EXAttackResistance) ?></p>
            <h6 class="subheader"><?= __('InAttackResistance') ?></h6>
            <p><?= $this->Number->format($familySprite->InAttackResistance) ?></p>
            <h6 class="subheader"><?= __('Toughness') ?></h6>
            <p><?= $this->Number->format($familySprite->Toughness) ?></p>
            <h6 class="subheader"><?= __('CritDes') ?></h6>
            <p><?= $this->Number->format($familySprite->CritDes) ?></p>
            <h6 class="subheader"><?= __('ControleffectDeepen') ?></h6>
            <p><?= $this->Number->format($familySprite->ControleffectDeepen) ?></p>
            <h6 class="subheader"><?= __('ControleffectResistance') ?></h6>
            <p><?= $this->Number->format($familySprite->ControleffectResistance) ?></p>
            <h6 class="subheader"><?= __('SlowingeffectDeepen') ?></h6>
            <p><?= $this->Number->format($familySprite->SlowingeffectDeepen) ?></p>
            <h6 class="subheader"><?= __('SlowingeffectResistance') ?></h6>
            <p><?= $this->Number->format($familySprite->SlowingeffectResistance) ?></p>
            <h6 class="subheader"><?= __('FixedeffectDeepen') ?></h6>
            <p><?= $this->Number->format($familySprite->FixedeffectDeepen) ?></p>
            <h6 class="subheader"><?= __('FixedeffectResistance') ?></h6>
            <p><?= $this->Number->format($familySprite->FixedeffectResistance) ?></p>
            <h6 class="subheader"><?= __('AgingeffectDeepen') ?></h6>
            <p><?= $this->Number->format($familySprite->AgingeffectDeepen) ?></p>
            <h6 class="subheader"><?= __('AgingeffectResistance') ?></h6>
            <p><?= $this->Number->format($familySprite->AgingeffectResistance) ?></p>
        </div>
    </div>
</div>
