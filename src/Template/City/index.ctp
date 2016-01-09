<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New City'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="city index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('guild_id') ?></th>
            <th><?= $this->Paginator->sort('defence') ?></th>
            <th><?= $this->Paginator->sort('eudemon_tally') ?></th>
            <th><?= $this->Paginator->sort('tax_rate') ?></th>
            <th><?= $this->Paginator->sort('tax_rate_time') ?></th>
            <th><?= $this->Paginator->sort('taxation') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($city as $city): ?>
        <tr>
            <td><?= $this->Number->format($city->id) ?></td>
            <td><?= $this->Number->format($city->guild_id) ?></td>
            <td><?= $this->Number->format($city->defence) ?></td>
            <td><?= $this->Number->format($city->eudemon_tally) ?></td>
            <td><?= $this->Number->format($city->tax_rate) ?></td>
            <td><?= $this->Number->format($city->tax_rate_time) ?></td>
            <td><?= $this->Number->format($city->taxation) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $city->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $city->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?>
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
