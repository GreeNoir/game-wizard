<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit City'), ['action' => 'edit', $city->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete City'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?> </li>
        <li><?= $this->Html->link(__('List City'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="city view large-10 medium-9 columns">
    <h2><?= h($city->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($city->id) ?></p>
            <h6 class="subheader"><?= __('Guild Id') ?></h6>
            <p><?= $this->Number->format($city->guild_id) ?></p>
            <h6 class="subheader"><?= __('Defence') ?></h6>
            <p><?= $this->Number->format($city->defence) ?></p>
            <h6 class="subheader"><?= __('Eudemon Tally') ?></h6>
            <p><?= $this->Number->format($city->eudemon_tally) ?></p>
            <h6 class="subheader"><?= __('Tax Rate') ?></h6>
            <p><?= $this->Number->format($city->tax_rate) ?></p>
            <h6 class="subheader"><?= __('Tax Rate Time') ?></h6>
            <p><?= $this->Number->format($city->tax_rate_time) ?></p>
            <h6 class="subheader"><?= __('Taxation') ?></h6>
            <p><?= $this->Number->format($city->taxation) ?></p>
            <h6 class="subheader"><?= __('Prolificacy') ?></h6>
            <p><?= $this->Number->format($city->prolificacy) ?></p>
        </div>
    </div>
</div>
