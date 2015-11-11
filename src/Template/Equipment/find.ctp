<?php if (count($ownersList) > 0) { ?>
    <div class="equipment table-responsive">
        <table class="table table-condensed table-bordered table-striped">
            <thead>
            <tr>
            <th><?= __('Number') ?></th>
            <th><?= __('Account ID') ?></th>
            <th><?= __('AccountName') ?></th>
            <th><?= __('Role ID') ?></th>
            <th><?= __('RoleName') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($ownersList as $owner): ?>
                <tr>
                    <td><?= $owner['Num'] ?></td>
                    <td><?php
                        $accountID = $this->Number->format($owner['AccountID']);
                        echo $this->Html->link($accountID, ['controller' => 'AccountCommon', 'action' => 'view', 'id' => $accountID]);
                    ?></td>
                    <td><?= $owner['AccountName'] ?></td>
                    <td>
                        <?php
                        $roleID = $this->Number->format($owner['OwnerID']);
                        echo $this->Html->link($roleID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $roleID]);
                    ?></td>
                    <td><?= $owner['RoleName'] ?></td>
                </tr>
            <?<?php endforeach; ?>  ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <div><?= __('No results') ?></div>
<?php } ?>