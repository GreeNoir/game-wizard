<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Back').__('Edit Guild'), ['action' => 'edit', $guildID]) ?> </li>
    </ul>
</div>
<div class="table-responsive col-lg-10">
    <h2 class="subheader"><?= __('Related Guild Cities').' #ID'.$guildID ?></h2>
    <table class="table table-condensed table-bordered table-striped">
        <tr>
            <th class="ids"><?= $this->Paginator->sort('id') ?></th>
            <th class="ids"><?= $this->Paginator->sort('defence') ?></th>
            <th class="ids"><?= $this->Paginator->sort('uudemon_tally') ?></th>
            <th class="ids"><?= $this->Paginator->sort('tax_rate') ?></th>
            <th class="ids"><?= $this->Paginator->sort('tax_rate_time') ?></th>
            <th class="ids"><?= $this->Paginator->sort('taxation') ?></th>
            <th class="ids"><?= $this->Paginator->sort('prolificacy') ?></th>
            <th class="ids"><?= $this->Paginator->sort('signup_list') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($cities as $city): ?>
        <tr>
            <td class="ids"><?= h($city->id) ?></td>
            <td class="ids"><?= h($city->defence) ?></td>
            <td class="ids"><?= h($city->eudemon_tally) ?></td>
            <td class="ids"><?= h($city->tax_rate) ?></td>
            <td class="ids"><?= h($city->tax_rate_time) ?></td>
            <td class="ids"><?= h($city->taxation) ?></td>
            <td class="ids"><?= h($city->prolificacy) ?></td>
            <td class="ids"><?= h($city->signup_list) ?></td>
            <td class="actions">
                <div class="icon-contain-inline action"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['controller' => 'City', 'action' => 'edit', $city->id],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action"><?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']),
                    ['controller' => 'City', 'action' => 'delete', $city->id],
                    ['escape' => false,
                    'confirm' => __('Are you sure you want to delete # {0}?', $city->id)
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
</div>