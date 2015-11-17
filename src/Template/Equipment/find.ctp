<?php if (count($ownersList) > 0) { ?>
    <div class="equipment find table-responsive">
        <table class="table table-condensed table-bordered table-striped">
            <thead>
            <tr>
            <th><?= __('Number') ?></th>
            <th><?= __('TypeID') ?></th>
            <th class="name"><?= __('Name') ?></th>
            <th><?= __('Account ID') ?></th>
            <th><?= __('AccountName') ?></th>
            <th><?= __('Role ID') ?></th>
            <th><?= __('RoleName') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($ownersList as $owner): ?>
                <tr>
                    <td><?= $owner->Num ?></td>
                    <td><?= $owner->TypeID ?></td>
                    <td><?= $owner->Name ?></td>
                    <td><?= $this->Html->link($owner->AccountID, ['controller' => 'AccountCommon', 'action' => 'view', 'id' => $owner->AccountID]) ?></td>
                    <td><?= $owner->AccountName ?></td>
                    <td><?= $this->Html->link($owner->OwnerID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $owner->OwnerID]) ?></td>
                    <td><?= $owner->RoleName ?></td>
                </tr>
            <?<?php endforeach; ?>  ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <div><?= __('No results') ?></div>
<?php } ?>