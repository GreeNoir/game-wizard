<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roledata->RoleID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roledata->RoleID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('RoledataList'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Equipment'), ['action' => 'equipment_item', 'id' => $roledata->RoleID, 'slug' => 'all']) ?></li>
        <?php if ($roledata->FamilyName != 'undefined'): ?>
            <li><?= $this->Html->link(__('Family').' "'.$roledata->FamilyName.'"', ['controller' => 'Family', 'action' => 'edit', 'id' => $roledata->FamilyID]) ?></li>
        <?php endif; ?>
        <li><?= $this->Html->link(__('Nurslings'), ['action' => 'nurslings', 'id' => $roledata->RoleID]) ?></li>
    </ul>
</div>
<legend><?= __('Edit Roledata') ?><div class="id">ID#<?= $roledata->RoleID ?></div></legend>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#panel_strings"><?= __('String parameters') ?></a></li>
    <li><a data-toggle="tab" href="#panel_numbers"><?= __('Number parameters') ?></a></li>
    <li><a data-toggle="tab" href="#panel_booleans"><?= __('Boolean parameters') ?></a></li>
</ul>

<div class="roledata form">
    <?= $this->Form->create($roledata, ['class' => 'form-horizontal']) ?>
    <div class="tab-content">
        <div id="panel_strings" class="strings tab-pane fade in active">
            <?php
            echo $this->Form->input('RoleName', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('CloseSGTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('GetMallFreeTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('CreateTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LoginTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LogoutTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);

            ?>
        </div>
        <div id="panel_numbers" class="numbers tab-pane fade in">
            <?php
            echo $this->Form->input('AccountID', ['class' => 'form-control', 'type'=>'text', 'disabled' => true, 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('RoleNameCrc', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Sex', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('SpeakOff', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('HairModelID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('HairColorID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FaceModelID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FaceDetailID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('DressModelID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('DisplaySet', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('MapID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('X', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Y', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Z', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FaceX', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FaceY', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FaceZ', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('RebornMapID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Class', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ClassEx', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LastUpgrade', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Level', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('WorkedLevel', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LevelPm', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ExpCurLevel', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('HP', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('MP', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Rage', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Endurance', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Vitality', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Injury', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Knowledge', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Morale', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Morality', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Culture', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Credit', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Identity', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('VIPPoint', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Spirit', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FixSpirit', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('WuXun', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('WuJi', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Weary', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('AttPtAvail', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentPtAvail', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('PhysiqueAdded', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('StrengthAdded', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('PneumaAdded', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('InnerforceAdded', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TechniqueAdded', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('AgilityAdded', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Strength', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('StrengthNum', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('EquipValue', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('EquipPm', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('AdvanceStrength', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ConsumptiveStrength', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('KillCount', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentType1', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentType2', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentType3', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentType4', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentVal1', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentVal2', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentVal3', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TalentVal4', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BagSize', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BagGold', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BagSilver', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BagYuanBao', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ExchangeVolume', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('GuildID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TotalTax', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('RemoteOpenSet', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('CurTitleID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);

            echo $this->Form->input('OnlineTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('CurOnlineTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('RemoveTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TreasureSum', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('StallLevel', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('StallDailyExp', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('StallCurExp', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('StallLastTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('DeadUnSetSafeGuardCountDown', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ItemTransportMapID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ItemTransportX', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ItemTransportZ', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ItemTransportY', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LoverID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('HaveWedding', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LastLessingTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LastLessingLevel', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('NeedPrisonRevive', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LastLessingLevelEx', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('LastLessingLoongDate', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('CurrentDayOnlineTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('OneDayFirstLoginedTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('OnlineRewardPerDayRecTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('MasterID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('JingWuPoint', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('QinWuPoint', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('MARelation', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FollowPetPocketValue', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('RidingPetPocketValue', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('MiraclePrcNum', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('MiracleResetTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('GodMiraclePoints', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('SoaringValue', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('SoaringSkillLearnTimes', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Toughness', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('CompleteRefreshTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('IMRefreshTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ConsolidateTimes', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TrainStateTransfered', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('RoleState', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('VipStartTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FreeWorldTalkTimes', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('VipMaxDays', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('YaoJingValue', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);

            echo $this->Form->input('YListCompleteRefreshTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('YListIMRefreshTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TakeGuildRewardTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ExpPilularUseTimes', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('PickupModeSetting', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('PlayerBackDays', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BePlayActLayerID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BePlayActLevel', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('GodHead', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('GodFaith', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('GodCondenced', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Clergy', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('PreClergy', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ClergyMarsPoint', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ClergyApolloPoint', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ClergyRabbiPoint', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ClergyPeacePoint', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('ClergyCandidateType', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('Clergy4SeniorOrJunior', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('FamilyID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('KeyCodeRewarded', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TrainDate', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TrainNum', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('award_point', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('award_flag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BrotherEndTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('BrotherTeacherID', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('PulseRemainTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('TigerTime', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('god_soul', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('monster_soul', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('god_point', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('monster_point', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('flower_num', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('egg_num', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('holy_value', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('role_hit_add', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            echo $this->Form->input('role_eei_all', ['class' => 'form-control', 'label' => ['class' => 'col-sm-3 control-label']]);
            ?>
        </div>
        <div id="panel_booleans" class="boolean tab-pane fade in">
            <?php
            echo $this->Form->input('SGFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('RemoveFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('Hostility', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('OfflineExperienceRewardFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('VipLevel', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('CanRankFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('Buy50LvlItemFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('Buy60LvlItemFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('Buy70LvlItemFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('Buy80LvlItemFlag', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('PlayerBack', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);
            echo $this->Form->input('UseConstraintsMaxPKSafeGuardLevel', ['class' => 'form-control', 'label' => ['class' => 'col-sm-2 control-label']]);

            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 voffset10">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>

