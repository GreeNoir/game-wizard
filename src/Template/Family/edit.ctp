<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                $this->Html->tag('i', '', ['class' => 'fa fa-fw fa-trash-o']).__('Delete'),
                ['action' => 'delete', $family->FamilyID],
                ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $family->FamilyID)])?></li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-table']).__('List Family'), ['action' => 'index'], ['escape' => false]) ?></li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-cog']).__('Sprite'), ['action' => 'edit_sprite', $family->FamilyID], ['escape' => false]) ?></li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-users']).__('Members'), ['action' => 'members', $family->FamilyID], ['escape' => false]) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="family form columns well">
        <?= $this->Form->create($family, ['class' => 'form-horizontal']) ?>
        <legend><?= __('Edit Family') ?><div class="id">#<?= $family->FamilyID ?></div></legend>
        <?= $this->Form->input('FamilyID', ['disabled' => true, 'type' => 'text', 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('FamilyName', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('LeaderID', ['options' => $roledata, 'required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('FounderID', ['options' => $roledata, 'required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Active', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('CreateTime', ['required' => true, 'type' => 'text', 'class' => 'date_input', 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-10">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
