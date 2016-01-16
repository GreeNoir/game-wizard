<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link('Add Guild Skill', ['action' => 'add_skill', $guildID]) ?></li>
        <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Back').__('Edit Guild'), ['action' => 'edit', $guildID]) ?> </li>
    </ul>
</div>
<div class="table-responsive col-lg-10">
    <h2 class="subheader"><?= __('Related Guild Skill').' #ID'.$guildID ?></h2>
    <?php if (count($skills)): ?>
    <table class="table table-condensed table-bordered table-striped">
        <tr>
            <th class="ids"><?= $this->Paginator->sort('skill_id') ?></th>
            <th class="ids"><?= $this->Paginator->sort('progress') ?></th>
            <th class="ids"><?= $this->Paginator->sort('level') ?></th>
            <th class="ids"><?= $this->Paginator->sort('researching') ?></th>
            <th class="ids"><?= $this->Paginator->sort('active') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
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