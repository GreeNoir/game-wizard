<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Family'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="family form columns well">
        <?= $this->Form->create($family, ['class' => 'form-horizontal']) ?>
        <?= $this->Form->input('FamilyName', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('LeaderID', ['options' => $roledata, 'required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('FounderID', ['options' => $roledata, 'required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Active', ['required' => false, 'label' => ['class' => 'col-md-3 control-label'], 'value' => 0]); ?>
        <?= $this->Form->input('CreateTime', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-10">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>