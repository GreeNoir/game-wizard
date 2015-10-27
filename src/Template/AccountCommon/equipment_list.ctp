<div class="actions columns large-2 medium-3">
    <h3><?=__('AccountListEquipment').$id ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('View').__('AccountCommon'), ['action' => 'view', $id]) ?> </li>
        <li><?= $this->Html->link(__('Edit').__('AccountCommon'), ['action' => 'edit', $id]) ?> </li>
        <li><?= $this->Html->link(__('Back').__('ListAccountCommon'), ['action' => 'index']) ?></li>
    </ul>
</div>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#panel_item"><?= __('Item') ?></a></li>
    <li><a data-toggle="tab" href="#panel_equip"><?= __('Equip') ?></a></li>
    <li><a data-toggle="tab" href="#panel_holyequip"><?= __('Holyequip') ?></a></li>
    <li><a data-toggle="tab" href="#panel_holyman"><?= __('Holyman') ?></a></li>
    <li><a data-toggle="tab" href="#panel_soulcrystal"><?= __('Soulcrystal') ?></a></li>
</ul>
<div class="tab-content equipment">
    <div id="panel_item" class="tab-pane fade in active">
        <?php if (count($itemList) > 0) { ?>
        <div class="table-responsive">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th><?= __('SerialNum') ?></th>
                    <th><?= __('TypeID') ?></th>
                    <th><?= __('Num') ?></th>
                    <th><?= __('Bind') ?></th>
                    <th><?= __('Role ID') ?></th>
                    <th><?= __('Create Time') ?></th>
                    <th><?= __('Delete Time') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($itemList as $item): ?>
                <tr>
                    <td><?= $item->cSerialNum ?></td>
                    <td><?= $item->TypeID ?></td>
                    <td><?= $item->Num ?></td>
                    <td><?= $item->Bind ?></td>
                    <td><?= $item->OwnerID ?></td>
                    <td><?= $item->CreateTime ?></td>
                    <td><?= $item->del_time ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
        <div><?= __('No results') ?></div>
        <?php } ?>
    </div>
    <div id="panel_equip" class="tab-pane fade in">
        <?php if (count($equipList) > 0) { ?>
            <div class="table-responsive">
                <table class="table table-condensed table-bordered table-striped">
                    <thead>
                    <tr>
                        <th><?= __('SerialNum') ?></th>
                        <th><?= __('TypeID') ?></th>
                        <th><?= __('Num') ?></th>
                        <th><?= __('Quality') ?></th>
                        <th><?= __('MinUseLevel') ?></th>
                        <th><?= __('MaxUseLevel') ?></th>
                        <th><?= __('WuHun') ?></th>
                        <th><?= __('MinDmg') ?></th>
                        <th><?= __('MaxDmg') ?></th>
                        <th><?= __('Armor') ?></th>
                        <th><?= __('PotVal') ?></th>
                        <th><?= __('PotValUsed') ?></th>
                        <th><?= __('Role ID') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($equipList as $equipItem): ?>
                    <tr>
                        <td><?= $equipItem->cSerialNum ?></td>
                        <td><?= $equipItem->typeID ?></td>
                        <td><?= $equipItem->num ?></td>
                        <td><?= $equipItem->Quality ?></td>
                        <td><?= $equipItem->MinUseLevel ?></td>
                        <td><?= $equipItem->MaxUseLevel ?></td>
                        <td><?= $equipItem->WuHun ?></td>
                        <td><?= $equipItem->MinDmg ?></td>
                        <td><?= $equipItem->MaxDmg ?></td>
                        <td><?= $equipItem->Armor ?></td>
                        <td><?= $equipItem->PotVal ?></td>
                        <td><?= $equipItem->PotValUsed ?></td>
                        <td><?= $equipItem->roleID ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
        <div><?= __('No results') ?></div>
        <?php } ?>
    </div>
    <div id="panel_holyequip" class="tab-pane fade in">
        <?php if (count($holyequipList) > 0) { ?>
            <div class="table-responsive">
                <table class="table table-condensed table-bordered table-striped">
                    <thead>
                    <tr>
                        <th><?= __('SerialNum') ?></th>
                        <th><?= __('TypeID') ?></th>
                        <th><?= __('Num') ?></th>
                        <th><?= __('CostHoly') ?></th>
                        <th><?= __('EnhanceCount') ?></th>
                        <th><?= __('HolyDmgChg') ?></th>
                        <th><?= __('HolyDefChg') ?></th>
                        <th><?= __('CritChg') ?></th>
                        <th><?= __('HolyCritRateChg') ?></th>
                        <th><?= __('ExDamageChg') ?></th>
                        <th><?= __('AttackTecChg') ?></th>
                        <th><?= __('NeglectToughnessChg') ?></th>
                        <th><?= __('Role ID') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($holyequipList as $holyequipItem): ?>
                    <tr>
                        <td><?= $holyequipItem->cSerialNum ?></td>
                        <td><?= $holyequipItem->typeID ?></td>
                        <td><?= $holyequipItem->num ?></td>
                        <td><?= $holyequipItem->CostHoly ?></td>
                        <td><?= $holyequipItem->EnhanceCount ?></td>
                        <td><?= $holyequipItem->HolyDmgChg ?></td>
                        <td><?= $holyequipItem->HolyDefChg ?></td>
                        <td><?= $holyequipItem->CritChg ?></td>
                        <td><?= $holyequipItem->HolyCritRateChg ?></td>
                        <td><?= $holyequipItem->ExDamageChg ?></td>
                        <td><?= $holyequipItem->AttackTecChg ?></td>
                        <td><?= $holyequipItem->NeglectToughnessChg ?></td>
                        <td><?= $holyequipItem->roleID ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <div><?= __('No results') ?></div>
        <?php } ?>
    </div>
    <div id="panel_holyman" class="tab-pane fade in">
        <?php if (count($holymanList) > 0) { ?>
        <div class="roledata_list table-responsive">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th><?= __('SerialNum') ?></th>
                    <th><?= __('TypeID') ?></th>
                    <th><?= __('Num') ?></th>
                    <th><?= __('DevourNum') ?></th>
                    <th><?= __('EquipmentNumber') ?></th>
                    <th><?= __('ToDayDevourNum') ?></th>
                    <th><?= __('EquipSerialIDs') ?></th>
                    <th><?= __('CostHoly') ?></th>
                    <th><?= __('CoValue') ?></th>
                    <th><?= __('HolyDmg') ?></th>
                    <th><?= __('HolyDef') ?></th>
                    <th><?= __('Crit') ?></th>
                    <th><?= __('HolyCritRate') ?></th>
                    <th><?= __('ExDamage') ?></th>
                    <th><?= __('AttackTec') ?></th>
                    <th><?= __('NeglectToughness') ?></th>
                    <th><?= __('HolyValue') ?></th>
                    <th><?= __('MaxDevourNum') ?></th>
                    <th><?= __('Role ID') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($holymanList as $holymanItem): ?>
                    <tr>
                        <td><?= $holymanItem->cSerialNum ?></td>
                        <td><?= $holymanItem->typeID ?></td>
                        <td><?= $holymanItem->num ?></td>
                        <td><?= $holymanItem->CostHoly ?></td>
                        <td><?= $holymanItem->EnhanceCount ?></td>
                        <td><?= $holymanItem->HolyDmgChg ?></td>
                        <td><?= $holymanItem->HolyDefChg ?></td>
                        <td><?= $holymanItem->CritChg ?></td>
                        <td><?= $holymanItem->HolyCritRateChg ?></td>
                        <td><?= $holymanItem->ExDamageChg ?></td>
                        <td><?= $holymanItem->AttackTecChg ?></td>
                        <td><?= $holymanItem->NeglectToughnessChg ?></td>
                        <td><?= $holymanItem->roleID ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
        <div><?= __('No results') ?></div>
        <?php } ?>
    </div>
    <div id="panel_soulcrystal" class="tab-pane fade in">
        <?php if (count($soulcrystalList) > 0) { ?>
        <div class="roledata_list table-responsive">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th><?= __('SerialNum') ?></th>
                    <th><?= __('TypeID') ?></th>
                    <th><?= __('Num') ?></th>
                    <th><?= __('SoulLevel') ?></th>
                    <th><?= __('SoulQlty') ?></th>
                    <th><?= __('SoulSkillID') ?></th>
                    <th><?= __('SoulAttID1') ?></th>
                    <th><?= __('SoulAttID2') ?></th>
                    <th><?= __('SoulAttID3') ?></th>
                    <th><?= __('SoulAttID4') ?></th>
                    <th><?= __('SoulAttID5') ?></th>
                    <th><?= __('SoulAttID6') ?></th>
                    <th><?= __('SoulAttID7') ?></th>
                    <th><?= __('SoulAttID8') ?></th>
                    <th><?= __('Role ID') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($soulcrystalList as $soulcrystalItem): ?>
                <tr>
                    <td><?= $soulcrystalItem->cSerialNum ?></td>
                    <td><?= $soulcrystalItem->typeID ?></td>
                    <td><?= $soulcrystalItem->num ?></td>
                    <td><?= $soulcrystalItem->SoulLevel ?></td>
                    <td><?= $soulcrystalItem->SoulQlty ?></td>
                    <td><?= $soulcrystalItem->SoulSkillID ?></td>
                    <td><?= $soulcrystalItem->SoulAttID1 ?></td>
                    <td><?= $soulcrystalItem->SoulAttID2 ?></td>
                    <td><?= $soulcrystalItem->SoulAttID3 ?></td>
                    <td><?= $soulcrystalItem->SoulAttID4 ?></td>
                    <td><?= $soulcrystalItem->SoulAttID5 ?></td>
                    <td><?= $soulcrystalItem->SoulAttID6 ?></td>
                    <td><?= $soulcrystalItem->SoulAttID7 ?></td>
                    <td><?= $soulcrystalItem->SoulAttID8 ?></td>
                    <td><?= $soulcrystalItem->roleID ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
        <div><?= __('No results') ?></div>
        <?php } ?>
    </div>
</div>