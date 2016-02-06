<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Family'), ['action' => 'edit', $family->FamilyID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Family'), ['action' => 'delete', $family->FamilyID], ['confirm' => __('Are you sure you want to delete # {0}?', $family->FamilyID)]) ?> </li>
        <li><?= $this->Html->link(__('List Family'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Sprite'), ['action' => 'view_sprite', $family->FamilyID]) ?></li>
        <li><?= $this->Html->link(__('Members'), ['action' => 'members', $family->FamilyID]) ?></li>
    </ul>
</div>
<div class="family view columns">
    <h2><?= h($family->FamilyID) ?></h2>
    <div class="row">
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('FamilyName') ?></div>
            <div class="col-sm-3"><?= h($family->FamilyName) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('FamilyID') ?></div>
            <div class="col-sm-3"><?= $family->FamilyID ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('LeaderID') ?></div>
            <div class="col-sm-3"><?= $family->LeaderID ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('FounderID') ?></div>
            <div class="col-sm-3"><?= $family->FounderID ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Active') ?></div>
            <div class="col-sm-3"><?= $family->Active ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('CreateTime') ?></div>
            <div class="col-sm-3"><?= h($family->CreateTime) ?></div>
        </div>
    </div>
</div>
