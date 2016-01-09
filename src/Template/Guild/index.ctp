<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Guild'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List City'), ['controller' => 'City', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'City', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Commerce Rank'), ['controller' => 'CommerceRank', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commerce Rank'), ['controller' => 'CommerceRank', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="guild index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('FounderNameID') ?></th>
            <th><?= $this->Paginator->sort('LeaderID') ?></th>
            <th><?= $this->Paginator->sort('SpecState') ?></th>
            <th><?= $this->Paginator->sort('Level') ?></th>
            <th><?= $this->Paginator->sort('HoldCity0') ?></th>
            <th><?= $this->Paginator->sort('HoldCity1') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($guild as $guild): ?>
        <tr>
            <td><?= $this->Number->format($guild->ID) ?></td>
            <td><?= $this->Number->format($guild->FounderNameID) ?></td>
            <td><?= $this->Number->format($guild->LeaderID) ?></td>
            <td><?= $this->Number->format($guild->SpecState) ?></td>
            <td><?= $this->Number->format($guild->Level) ?></td>
            <td><?= $this->Number->format($guild->HoldCity0) ?></td>
            <td><?= $this->Number->format($guild->HoldCity1) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $guild->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $guild->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $guild->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $guild->ID)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
