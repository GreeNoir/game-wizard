<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                $this->Html->tag('i', '', ['class' => 'fa fa-fw fa-trash-o']).__('Delete'),
                ['action' => 'delete', $commerceRank->role_id],
                ['escape' => false,
                'confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)]
            )
        ?></li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-table']).__('List Commerce Rank'), ['action' => 'index'], ['escape' => false]) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="commerceRank form well">
        <?= $this->Form->create($commerceRank, ['class' => 'form-horizontal']) ?>
        <legend><?= __('Edit Commerce Rank') ?><div class="id"> #<?= $commerceRank->role_id ?></div></legend>
        <?= $this->Form->input('guild_id', ['required' => true, 'type' => 'text', 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('times', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('tael', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <div class="form-group">
            <div class="col-md-offset-3">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>