<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List City'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="city form large-10 medium-9 columns">
    <?= $this->Form->create($city) ?>
    <legend><?= __('Add City') ?></legend>
    <?= $this->Form->input('guild_id', ['required' => true, 'options' => $guildIds, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('defence', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('eudemon_tally', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('tax_rate', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('tax_rate_time', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('taxation', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('prolificacy', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 voofset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>

<?= $this->Html->scriptBlock('
    var guildID = "'.$guild_id.'";
    $("select[name=guild_id]").val(guildID);
') ?>
