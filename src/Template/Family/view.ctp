<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-pencil']).__('Edit Family'), ['action' => 'edit', $family->FamilyID], ['escape' => false]) ?> </li>
        <li><?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-trash-o']).__('Delete Family'), ['action' => 'delete', $family->FamilyID], ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $family->FamilyID)]) ?> </li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-table']).__('List Family'), ['action' => 'index'], ['escape' => false]) ?> </li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-cog']).__('Sprite'), ['action' => 'view_sprite', $family->FamilyID], ['escape' => false]) ?></li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-users']).__('Members'), ['action' => 'members', $family->FamilyID], ['escape' => false]) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="family columns view well">
        <div class="row">
            <div class="form-group col-md-12">
                <div class="col-md-4 subheader"><?= __('FamilyID') ?></div>
                <div class="col-md-8"><?= $family->FamilyID ?></div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-md-4 subheader"><?= __('FamilyName') ?></div>
                <div class="col-md-8"><?= h($family->FamilyName) ?></div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-md-4 subheader"><?= __('LeaderID') ?></div>
                <div class="col-md-8"><?= $family->LeaderID ?></div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-md-4 subheader"><?= __('FounderID') ?></div>
                <div class="col-md-8"><?= $family->FounderID ?></div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-md-4 subheader"><?= __('Active') ?></div>
                <div class="col-md-8"><?= $family->Active ?></div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-md-4 subheader"><?= __('CreateTime') ?></div>
                <div class="col-md-8"><?= h($family->CreateTime) ?></div>
            </div>
        </div>
    </div>
</div>
