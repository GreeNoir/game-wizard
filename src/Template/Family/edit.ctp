<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $family->FamilyID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $family->FamilyID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Family'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Sprite'), ['action' => 'edit_sprite', $family->FamilyID]) ?></li>
        <li><?= $this->Html->link(__('Members'), ['action' => 'members', $family->FamilyID]) ?></li>
    </ul>
</div>
<div class="family form">
    <?= $this->Form->create($family) ?>
    <legend><?= __('Edit Family') ?></legend>
    <?= $this->Form->input('FamilyID', ['disabled' => true, 'type' => 'text', 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('FamilyName', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('LeaderID', ['options' => $roledata, 'required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('FounderID', ['options' => $roledata, 'required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('Active', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('CreateTime', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 voofset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
