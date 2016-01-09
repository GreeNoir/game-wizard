<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Commerce Rank'), ['action' => 'edit', $commerceRank->role_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commerce Rank'), ['action' => 'delete', $commerceRank->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Commerce Rank'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commerce Rank'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="commerceRank view large-10 medium-9 columns">
    <h2><?= h($commerceRank->role_id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Role Id') ?></h6>
            <p><?= $this->Number->format($commerceRank->role_id) ?></p>
            <h6 class="subheader"><?= __('Guild Id') ?></h6>
            <p><?= $this->Number->format($commerceRank->guild_id) ?></p>
            <h6 class="subheader"><?= __('Times') ?></h6>
            <p><?= $this->Number->format($commerceRank->times) ?></p>
            <h6 class="subheader"><?= __('Tael') ?></h6>
            <p><?= $this->Number->format($commerceRank->tael) ?></p>
        </div>
    </div>
</div>
