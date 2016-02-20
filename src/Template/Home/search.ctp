<div class="col-md-8">
    <div class="well">
        <?php if (count($searchResults)): ?>
            <h4><?= __('Search results') ?>: "<?= $searchString ?>"</h4>
            <?php foreach($searchResults as $table=>$searchResults) : ?>
                <?php if (count($searchResults)) : ?>
                <div class="search_part">
                    <h5><?= __('Search results for ').__($table) ?>:</h5>
                    <?php foreach($searchResults as $item): ?>
                            <div>
                                <?php
                                if ($table == 'Item') {
                                    if ($item->EquipType != 'undefined') {
                                        echo $this->Html->link($item->id.' - '.$item->EquipType, ['controller' => 'Roledata', 'action' => 'edit_equipment', '?' => ['type' => $item->EquipType, 'serial' => $item->id, 'roleID' => $item->OwnerID]]);
                                        echo ' '.__('Owner').' - '.$this->Html->link($item->RoleName, ['controller' => 'Roledata', 'action' => 'view', $item->OwnerID]);
                                    } else {
                                        echo $item->id;
                                    }
                                } else { ?>
                                    <?= $this->Html->link($item->id.(isset($item->name) ? ' - '.$item->name : ''), ['controller' => $table, 'action' => 'view', $item->id]) ?>
                                <?php } ?>
                            </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <div><?= __('SearchEmpty') ?></div>
        <?php endif; ?>
    </div>
</div>

<?= $this->Html->scriptBlock('
    $("input#search").val("'.$searchString.'");
') ?>