<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commerceRank->role_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Commerce Rank'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="commerceRank form large-10 medium-9 columns">
    <?= $this->Form->create($commerceRank) ?>
    <fieldset>
        <legend><?= __('Edit Commerce Rank') ?></legend>
        <?php
            echo $this->Form->input('guild_id');
            echo $this->Form->input('times');
            echo $this->Form->input('tael');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
