<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('ListOfFamily'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="familySprite form large-10 medium-9 columns">
    <?= $this->Form->create($familySprite) ?>
    <fieldset>
        <legend><?= __('Edit Family Sprite') ?></legend>
        <?php
            echo $this->Form->input('Level');
            echo $this->Form->input('Exp');
            echo $this->Form->input('Name');
            echo $this->Form->input('HP');
            echo $this->Form->input('EXAttack');
            echo $this->Form->input('InAttack');
            echo $this->Form->input('EXDefense');
            echo $this->Form->input('InDefense');
            echo $this->Form->input('EXAttackDeeper');
            echo $this->Form->input('InAttackDeeper');
            echo $this->Form->input('EXAttackResistance');
            echo $this->Form->input('InAttackResistance');
            echo $this->Form->input('Toughness');
            echo $this->Form->input('CritDes');
            echo $this->Form->input('ControleffectDeepen');
            echo $this->Form->input('ControleffectResistance');
            echo $this->Form->input('SlowingeffectDeepen');
            echo $this->Form->input('SlowingeffectResistance');
            echo $this->Form->input('FixedeffectDeepen');
            echo $this->Form->input('FixedeffectResistance');
            echo $this->Form->input('AgingeffectDeepen');
            echo $this->Form->input('AgingeffectResistance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
