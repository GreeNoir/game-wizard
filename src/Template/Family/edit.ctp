<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $family->FamilyID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $family->FamilyID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Family'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="family form large-10 medium-9 columns">
    <?= $this->Form->create($family) ?>
    <fieldset>
        <legend><?= __('Edit Family') ?></legend>
        <?php
            echo $this->Form->input('FamilyName');
            echo $this->Form->input('LeaderID');
            echo $this->Form->input('FounderID');
            echo $this->Form->input('Active');
            echo $this->Form->input('CreateTime');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
