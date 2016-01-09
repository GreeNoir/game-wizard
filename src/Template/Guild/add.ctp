<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List City'), ['controller' => 'City', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'City', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Commerce Rank'), ['controller' => 'CommerceRank', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commerce Rank'), ['controller' => 'CommerceRank', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="guild form large-10 medium-9 columns">
    <?= $this->Form->create($guild) ?>
    <fieldset>
        <legend><?= __('Add Guild') ?></legend>
        <?php
            echo $this->Form->input('FounderNameID');
            echo $this->Form->input('LeaderID');
            echo $this->Form->input('SpecState');
            echo $this->Form->input('Level');
            echo $this->Form->input('HoldCity0');
            echo $this->Form->input('HoldCity1');
            echo $this->Form->input('HoldCity2');
            echo $this->Form->input('Fund');
            echo $this->Form->input('Material');
            echo $this->Form->input('Rep');
            echo $this->Form->input('DailyCost');
            echo $this->Form->input('Peace');
            echo $this->Form->input('Rank');
            echo $this->Form->input('CreateTime');
            echo $this->Form->input('GroupPurchase');
            echo $this->Form->input('RemainSpreadTimes');
            echo $this->Form->input('Commendation');
            echo $this->Form->input('GuildValue1');
            echo $this->Form->input('GuildValue2');
            echo $this->Form->input('skill._ids', ['options' => $skill]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
