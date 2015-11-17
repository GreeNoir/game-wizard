<div class="actions columns large-2 medium-3">
    <h3><?=__('RoledataListEquipmentItem').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('Equipment'), ['action' => 'equipment_list', $id]) ?></li>
    </ul>
</div>
<?php if ($itemListCount > 0) { ?>
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-striped equip">
        <thead>
        <tr>
            <th><?= __('SerialNum') ?></th>
            <th><?= __('TypeID') ?></th>
            <th><?= __('Num') ?></th>
            <th><?= __('Bind') ?></th>
            <th><?= __('Create Time') ?></th>
            <th><?= __('Delete Time') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($itemList as $item): ?>
        <tr>
            <td><?= $item->cSerialNum ?></td>
            <td><?= $item->TypeID ?></td>
            <td><?= $item->Num ?></td>
            <td><?= $item->Bind ?></td>
            <td><?= $item->CreateTime ?></td>
            <td><?= $item->del_time ?></td>
            <td><?= $item->Name ?></td>
            <td class="actions">
                <div class="action">
                    <?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-minus-circle']),
                    ['action' => 'del_equip'],
                    ['escape' => false,
                    'data' => ['serial' => $item->cSerialNum, 'typeid' => $item->TypeID, 'roleid' => $id, 'base' => 'item']]) ?>
                </div>
                <div class="action">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-plus-circle']),
                    ['action' => 'edit_equip'],
                    ['escape' => false]) ?>
                </div>
                <div class="action">
                    <?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['action' => 'edit_equip'],
                    ['escape' => false]) ?>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td><?= __('Total') ?>:</td>
            <td colspan="5"><?= $itemListCount ?></td>
        </tr>
        </tfoot>
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
<?php } else { ?>
<div><?= __('No results') ?></div>
<?php } ?>