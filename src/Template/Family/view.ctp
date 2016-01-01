<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Family'), ['action' => 'edit', $family->FamilyID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Family'), ['action' => 'delete', $family->FamilyID], ['confirm' => __('Are you sure you want to delete # {0}?', $family->FamilyID)]) ?> </li>
        <li><?= $this->Html->link(__('List Family'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="family view large-10 medium-9 columns">
    <h2><?= h($family->FamilyID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('FamilyName') ?></h6>
            <p><?= h($family->FamilyName) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('FamilyID') ?></h6>
            <p><?= $this->Number->format($family->FamilyID) ?></p>
            <h6 class="subheader"><?= __('LeaderID') ?></h6>
            <p><?= $this->Number->format($family->LeaderID) ?></p>
            <h6 class="subheader"><?= __('FounderID') ?></h6>
            <p><?= $this->Number->format($family->FounderID) ?></p>
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $this->Number->format($family->Active) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('CreateTime') ?></h6>
            <p><?= h($family->CreateTime) ?></p>
        </div>
    </div>
</div>
