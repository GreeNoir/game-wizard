<div class="actions columns large-2 medium-3">
    <ul class="breadcrumb">
        <li><?= $this->Html->link(__('RoledataList'), ['controller' => 'Roledata', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link($accountName, ['controller' => 'AccountCommon', 'action' => 'view', $accountID]) ?></li>
        <li><?= $this->Html->link($roleName, ['action' => 'view', $id]) ?></li>
        <li class="active"><?= __('Nurslings') ?></li>
    </ul>
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('RoledataList'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="table-responsive col-lg-8">
    <?php if(count($nurslings)): ?>
    <h3><?=__('NurslingsList') ?></h3>
    <table class="table table-hover table-striped nurslings">
        <thead>
        <tr>
            <th class="ids"><?= __('ID') ?></th>
            <th><?= __('Name') ?></th>
            <th class="ids"><?= __('pet_value') ?></th>
            <th class="ids"><?= __('pet_pm') ?></th>
            <th class="ids"><?= __('quality') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($nurslings as $nursling): ?>
        <tr>
            <td class="ids"><?= $nursling->pet_id ?></td>
            <td><?= $nursling->pet_name ?></td>
            <td class="ids"><?= $nursling->pet_value ?></td>
            <td class="ids"><?= $nursling->pet_pm ?></td>
            <td class="ids"><?= $nursling->quality ?></td>
            <td class="actions">
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('View') ?>"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-external-link']),
                    ['controller' => 'PetData', 'action' => 'view', 'id' => $nursling->pet_id],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('Edit') ?>"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['controller' => 'PetData', 'action' => 'edit', 'id' => $nursling->pet_id],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action" data-toggle="tooltip" title="<?= __('Delete') ?>"><?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']),
                    ['controller' => 'PetData', 'action' => 'delete', 'id' => $nursling->pet_id],
                    ['escape' => false,
                    'confirm' => __('Are you sure you want to delete # {0}?', $nursling->pet_id)
                    ]) ?></div>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <div class="not_found"><?= __('Not Found') ?></div>
    <?php endif; ?>
</div>
