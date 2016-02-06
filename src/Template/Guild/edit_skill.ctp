<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete_skill', '?' => ['guild_id' => $guildSkill->guild_id, 'skill_id' => $guildSkill->skill_id]],
                ['confirm' => __('Are you sure you want to delete # {0}?', $guildSkill->skill_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="guild form">
    <?= $this->Form->create($guildSkill) ?>
    <legend><?= __('Edit Guild Skill') ?><div class="id"><?= $guildSkill->skill_id ?></div></legend>
    <?= $this->Form->input('guild_id', ['type' => 'text', 'class' => 'form-control', 'disabled' =>true, 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('skill_id', ['type' => 'text', 'class' => 'form-control', 'disabled' =>true, 'label' => ['class' => 'col-sm-2 control-label']]); ?>
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
