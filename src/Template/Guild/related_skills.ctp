<div class="actions columns">
    <ul class="side-nav">
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-plus-square-o']).__('Add Guild Skill'), ['action' => 'add_skill', $guildID], ['escape' => false]) ?></li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-table']).__('List Guild'), ['action' => 'index'], ['escape' => false]) ?> </li>
        <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-pencil']).__('Back').__('Edit Guild'), ['action' => 'edit', $guildID], ['escape' => false]) ?> </li>
    </ul>
</div>
<ul class="breadcrumb col-md-10">
    <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Back').__('Edit Guild'), ['action' => 'edit', $guildID]) ?></li>
    <li class="active"><?= __('Related Skills') ?></li>
</ul>
<div class="table-responsive col-md-10">
    <?php if (count($skills)): ?>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th class="ids"><?= $this->Paginator->sort('skill_id') ?></th>
            <th class="ids"><?= $this->Paginator->sort('progress') ?></th>
            <th class="ids"><?= $this->Paginator->sort('level') ?></th>
            <th class="ids"><?= $this->Paginator->sort('researching') ?></th>
            <th class="ids"><?= $this->Paginator->sort('active') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <?php foreach ($skills as $skill): ?>
        <tr>
            <td class="ids"><?= $skill->skill_id ?></td>
            <td class="ids"><?= $skill->progress ?></td>
            <td class="ids"><?= $skill->level ?></td>
            <td class="ids"><?= $skill->researching ? __('Yes') : __('No') ?></td>
            <td class="ids"><?= $skill->active ? __('Yes') : __('No') ?></td>
            <td class="actions">
                <div class="icon-contain-inline action"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['action' => 'edit_skill', '?' => ['guild_id' => $skill->guild_id, 'skill_id' => $skill->skill_id]],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action"><?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']),
                    ['action' => 'delete_skill', '?' => ['skill_id' => $skill->skill_id, 'guild_id' => $guildID]],
                    ['escape' => false,
                    'confirm' => __('Are you sure you want to delete # {0}?', $skill->skill_id)
                    ]) ?></div>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
    <?php else: ?>
    <div class="not_found"><?= __('Not Found') ?></div>
    <?php endif; ?>
</div>