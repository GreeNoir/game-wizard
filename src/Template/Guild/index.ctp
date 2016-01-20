<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Guild'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List City'), ['controller' => 'City', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Commerce Rank'), ['controller' => 'CommerceRank', 'action' => 'index']) ?></li>
    </ul>
</div>
<div class="guild table-responsive col-lg-10">
    <table class="table table-condensed table-bordered table-striped">
    <thead>
        <tr>
            <th class="ids"><?= $this->Paginator->sort('ID') ?></th>
            <th class="ids"><?= $this->Paginator->sort('FounderNameID') ?></th>
            <th class="ids"><?= $this->Paginator->sort('LeaderID') ?></th>
            <th class="ids"><?= $this->Paginator->sort('SpecState') ?></th>
            <th class="ids"><?= $this->Paginator->sort('Level') ?></th>
            <th class="ids"><?= $this->Paginator->sort('HoldCity0') ?></th>
            <th class="ids"><?= $this->Paginator->sort('HoldCity1') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($guild as $guild): ?>
        <tr>
            <td class="ids"><?= $guild->ID ?></td>
            <td class="ids"><?= $this->Html->link($guild->FounderNameID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $guild->FounderNameID]) ?></td>
            <td class="ids"><?= $this->Html->link($guild->LeaderID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $guild->LeaderID]) ?></td>
            <td class="ids"><?= $guild->SpecState ?></td>
            <td class="ids"><?= $guild->Level ?></td>
            <td class="ids"><?= $guild->HoldCity0 ?></td>
            <td class="ids"><?= $guild->HoldCity1 ?></td>
            <td class="actions">
                <div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-external-link']).$this->Html->tag('div', __('View')),
                        ['action' => 'view', 'id' => $guild->ID],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-pencil']).$this->Html->tag('div', __('Edit')),
                        ['action' => 'edit', 'id' => $guild->ID],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Form->postLink(
                        $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']).$this->Html->tag('div', __('Delete')),
                        ['action' => 'delete', $guild->ID],
                        ['escape' => false,
                        'confirm' => __('Are you sure you want to delete # {0}?', $guild->ID)
                        ]) ?></div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-users']).$this->Html->tag('div', __('Members')),
                        ['action' => 'members', $guild->ID],
                        ['escape' => false]) ?></div>
                </div>
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
