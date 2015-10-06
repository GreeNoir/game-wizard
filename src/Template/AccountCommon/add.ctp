<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List').__('AccountCommon'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="account_common form">
    <?= $this->Form->create($accountCommon, ['class' => 'form-horizontal']) ?>

    <legend><?= __('Add Account Common') ?></legend>
    <?= $this->Form->input('AccountName', ['required' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('ChannelID', ['type' => 'text', 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('BaiBaoYuanBao', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('WareSize', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('WareSilver', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>
    <?= $this->Form->input('LastUseRoleID', ['type' => 'text', 'disabled' => true, 'class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]); ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= $this->Form->button(__('Create'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->scriptBlock('
    $("div.input").addClass("form-group col-sm-10");
') ?>

