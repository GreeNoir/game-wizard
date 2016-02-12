<div class="actions columns">
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
