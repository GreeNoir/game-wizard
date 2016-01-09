<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List City'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="city form large-10 medium-9 columns">
    <?= $this->Form->create($city) ?>
    <fieldset>
        <legend><?= __('Add City') ?></legend>
        <?php
            echo $this->Form->input('guild_id');
            echo $this->Form->input('defence');
            echo $this->Form->input('eudemon_tally');
            echo $this->Form->input('tax_rate');
            echo $this->Form->input('tax_rate_time');
            echo $this->Form->input('taxation');
            echo $this->Form->input('prolificacy');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
