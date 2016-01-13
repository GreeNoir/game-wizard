<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commerceRank->role_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Commerce Rank'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="commerceRank form">
    <?= $this->Form->create($commerceRank) ?>
    <legend><?= __('Edit Commerce Rank') ?><div class="id">ID#<?= $commerceRank->role_id ?></div></legend>
    <?= $this->Form->input('guild_id', ['required' => true, 'type' => 'text', 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('times', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('tael', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 voofset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
