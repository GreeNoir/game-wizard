<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $accountCommon->AccountID],
            ['confirm' => __('Are you sure you want to delete # {0}?', $accountCommon->AccountID)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List').__('AccountCommon'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="account_common form large-10 medium-9 columns">
    <?= $this->Form->create($accountCommon) ?>
    <fieldset>
        <legend><?= __('Edit Account Common') ?></legend>
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
