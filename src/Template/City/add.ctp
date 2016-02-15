<div class="actions columns">
    <ul class="side-nav">
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-table']).__('List City'), ['action' => 'index'], ['escape' => false]) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="city form columns well">
        <?= $this->Form->create($city, ['class' => 'form-horizontal']) ?>
        <legend><?= __('Add City') ?></legend>
        <?= $this->Form->input('guild_id', ['required' => true, 'options' => $guildIds, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('defence', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('eudemon_tally', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('tax_rate', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('tax_rate_time', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('taxation', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('prolificacy', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-10">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->scriptBlock('
    var guildID = "'.$guild_id.'";
    $("select[name=guild_id]").val(guildID);
') ?>
