<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Back').__('Related Skills'), ['action' => 'related_skills', $guildID]) ?></li>
    </ul>
</div>
<div class="guildSkill form large-10 medium-9 columns">
    <?= $this->Form->create($guildSkill) ?>
    <legend><?= __('Add Guild Skill for Guild #').$guildID ?></legend>
    <?= $this->Form->input('skill_id', ['disabled' => 'true', 'type' => 'text', 'class' => 'form-control', 'label' => ['text' => 'Skill Id', 'class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('progress', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('level', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('researching', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('active', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 voofset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>