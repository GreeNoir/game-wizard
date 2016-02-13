<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-list-alt']).__('List').__('AccountCommon'), ['action' => 'index'], ['escape' => false]) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="account_common form well">
        <?= $this->Form->create($accountCommon, ['class' => 'form-horizontal']) ?>

        <legend><?= __('Add Account Common') ?></legend>
        <?= $this->Form->input('AccountName', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('ChannelID', ['type' => 'text', 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('BaiBaoYuanBao', ['label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('WareSize', ['label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('WareSilver', ['label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('LastUseRoleID', ['type' => 'text', 'disabled' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?= $this->Form->button(__('Create'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
