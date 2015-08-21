<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Account Common'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="account_common form large-10 medium-9 columns">
    <?= $this->Form->create($accountCommon) ?>
    <fieldset>
        <legend><?= __('Add Account Common') ?></legend>
        <?php
            echo $this->Form->input('AccountName', ['required' => true]);
        ?>
        <?php
            echo $this->Form->input('BaiBaoYuanBao');
        ?>
        <?php
            echo $this->Form->input('WareSize');
        ?>
        <?php
            echo $this->Form->input('WareSilver');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
