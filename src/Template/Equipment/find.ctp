<?php if (count($ownersList) > 0) { ?>
    <div class="equipment table-responsive">
        <table class="table table-condensed table-bordered table-striped">
            <thead>
            <tr>
            <th><?= __('Account ID') ?></th>
            <th><?= __('Role ID') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($ownersList as $owner): ?>
                <tr>
                    <td><?php
                        $accountID = $this->Number->format($owner['AccountID']);
                        echo $this->Html->link($accountID, ['controller' => 'AccountCommon', 'action' => 'view', 'id' => $accountID]);
                    ?></td>
                    <td>
                        <?php
                        $roleID = $this->Number->format($owner['OwnerID']);
                        echo $this->Html->link($roleID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $roleID]);
                    ?></td>
                </tr>
            <?<?php endforeach; ?>  ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <div><?= __('No results') ?></div>
<?php } ?>