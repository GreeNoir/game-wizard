<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Commerce Rank'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="commerceRank form large-10 medium-9 columns">
    <?= $this->Form->create($commerceRank) ?>
    <legend><?= __('Add Commerce Rank') ?></legend>
    <?= $this->Form->input('guild_id', ['options' => $guildIds, 'required' => true, 'class' => 'form-control', 'label' => ['text' => 'Guild ID', 'class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('times', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('tael', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 voofset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->scriptBlock('
var guildID = "'.$guild_id.'";
$("select[name=guild_id]").val(guildID);
') ?>