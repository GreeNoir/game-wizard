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
    </ul>
</div>
<div class="roledata form large-10 medium-9 columns">
    <?= $this->Form->create($roledata) ?>
    <fieldset>
        <legend><?= __('Edit Roledata') ?></legend>
        <?php
            echo $this->Form->input('AccountID');
            echo $this->Form->input('RoleName');
            echo $this->Form->input('RoleNameCrc');
            echo $this->Form->input('Sex');
            echo $this->Form->input('SpeakOff');
            echo $this->Form->input('HairModelID');
            echo $this->Form->input('HairColorID');
            echo $this->Form->input('FaceModelID');
            echo $this->Form->input('FaceDetailID');
            echo $this->Form->input('DressModelID');
            echo $this->Form->input('DisplaySet');
            echo $this->Form->input('MapID');
            echo $this->Form->input('X');
            echo $this->Form->input('Y');
            echo $this->Form->input('Z');
            echo $this->Form->input('FaceX');
            echo $this->Form->input('FaceY');
            echo $this->Form->input('FaceZ');
            echo $this->Form->input('RebornMapID');
            echo $this->Form->input('Class');
            echo $this->Form->input('ClassEx');
            echo $this->Form->input('LastUpgrade');
            echo $this->Form->input('Level');
            echo $this->Form->input('WorkedLevel');
            echo $this->Form->input('LevelPm');
            echo $this->Form->input('ExpCurLevel');
            echo $this->Form->input('HP');
            echo $this->Form->input('MP');
            echo $this->Form->input('Rage');
            echo $this->Form->input('Endurance');
            echo $this->Form->input('Vitality');
            echo $this->Form->input('Injury');
            echo $this->Form->input('Knowledge');
            echo $this->Form->input('Morale');
            echo $this->Form->input('Morality');
            echo $this->Form->input('Culture');
            echo $this->Form->input('Credit');
            echo $this->Form->input('Identity');
            echo $this->Form->input('VIPPoint');
            echo $this->Form->input('Spirit');
            echo $this->Form->input('FixSpirit');
            echo $this->Form->input('WuXun');
            echo $this->Form->input('WuJi');
            echo $this->Form->input('Weary');
            echo $this->Form->input('AttPtAvail');
            echo $this->Form->input('TalentPtAvail');
            echo $this->Form->input('PhysiqueAdded');
            echo $this->Form->input('StrengthAdded');
            echo $this->Form->input('PneumaAdded');
            echo $this->Form->input('InnerforceAdded');
            echo $this->Form->input('TechniqueAdded');
            echo $this->Form->input('AgilityAdded');
            echo $this->Form->input('Strength');
            echo $this->Form->input('StrengthNum');
            echo $this->Form->input('EquipValue');
            echo $this->Form->input('EquipPm');
            echo $this->Form->input('AdvanceStrength');
            echo $this->Form->input('ConsumptiveStrength');
            echo $this->Form->input('KillCount');
            echo $this->Form->input('TalentType1');
            echo $this->Form->input('TalentType2');
            echo $this->Form->input('TalentType3');
            echo $this->Form->input('TalentType4');
            echo $this->Form->input('TalentVal1');
            echo $this->Form->input('TalentVal2');
            echo $this->Form->input('TalentVal3');
            echo $this->Form->input('TalentVal4');
            echo $this->Form->input('SGFlag');
            echo $this->Form->input('CloseSGTime');
            echo $this->Form->input('BagSize');
            echo $this->Form->input('BagGold');
            echo $this->Form->input('BagSilver');
            echo $this->Form->input('BagYuanBao');
            echo $this->Form->input('ExchangeVolume');
            echo $this->Form->input('GuildID');
            echo $this->Form->input('TotalTax');
            echo $this->Form->input('RemoteOpenSet');
            echo $this->Form->input('CurTitleID');
            echo $this->Form->input('GetMallFreeTime');
            echo $this->Form->input('CreateTime');
            echo $this->Form->input('LoginTime');
            echo $this->Form->input('LogoutTime');
            echo $this->Form->input('OnlineTime');
            echo $this->Form->input('CurOnlineTime');
            echo $this->Form->input('RemoveFlag');
            echo $this->Form->input('RemoveTime');
            echo $this->Form->input('TreasureSum');
            echo $this->Form->input('StallLevel');
            echo $this->Form->input('StallDailyExp');
            echo $this->Form->input('StallCurExp');
            echo $this->Form->input('StallLastTime');
            echo $this->Form->input('Hostility');
            echo $this->Form->input('DeadUnSetSafeGuardCountDown');
            echo $this->Form->input('ItemTransportMapID');
            echo $this->Form->input('ItemTransportX');
            echo $this->Form->input('ItemTransportZ');
            echo $this->Form->input('ItemTransportY');
            echo $this->Form->input('LoverID');
            echo $this->Form->input('HaveWedding');
            echo $this->Form->input('LastLessingTime');
            echo $this->Form->input('LastLessingLevel');
            echo $this->Form->input('NeedPrisonRevive');
            echo $this->Form->input('LastLessingLevelEx');
            echo $this->Form->input('LastLessingLoongDate');
            echo $this->Form->input('CurrentDayOnlineTime');
            echo $this->Form->input('OneDayFirstLoginedTime');
            echo $this->Form->input('OnlineRewardPerDayRecTime');
            echo $this->Form->input('OfflineExperienceRewardFlag');
            echo $this->Form->input('MasterID');
            echo $this->Form->input('JingWuPoint');
            echo $this->Form->input('QinWuPoint');
            echo $this->Form->input('MARelation');
            echo $this->Form->input('FollowPetPocketValue');
            echo $this->Form->input('RidingPetPocketValue');
            echo $this->Form->input('MiraclePrcNum');
            echo $this->Form->input('MiracleResetTime');
            echo $this->Form->input('GodMiraclePoints');
            echo $this->Form->input('SoaringValue');
            echo $this->Form->input('SoaringSkillLearnTimes');
            echo $this->Form->input('Toughness');
            echo $this->Form->input('CompleteRefreshTime');
            echo $this->Form->input('IMRefreshTime');
            echo $this->Form->input('ConsolidateTimes');
            echo $this->Form->input('TrainStateTransfered');
            echo $this->Form->input('RoleState');
            echo $this->Form->input('VipLevel');
            echo $this->Form->input('VipStartTime');
            echo $this->Form->input('FreeWorldTalkTimes');
            echo $this->Form->input('VipMaxDays');
            echo $this->Form->input('CanRankFlag');
            echo $this->Form->input('YaoJingValue');
            echo $this->Form->input('Buy50LvlItemFlag');
            echo $this->Form->input('Buy60LvlItemFlag');
            echo $this->Form->input('Buy70LvlItemFlag');
            echo $this->Form->input('Buy80LvlItemFlag');
            echo $this->Form->input('YListCompleteRefreshTime');
            echo $this->Form->input('YListIMRefreshTime');
            echo $this->Form->input('TakeGuildRewardTime');
            echo $this->Form->input('ExpPilularUseTimes');
            echo $this->Form->input('PickupModeSetting');
            echo $this->Form->input('PlayerBack');
            echo $this->Form->input('PlayerBackDays');
            echo $this->Form->input('UseConstraintsMaxPKSafeGuardLevel');
            echo $this->Form->input('BePlayActLayerID');
            echo $this->Form->input('BePlayActLevel');
            echo $this->Form->input('GodHead');
            echo $this->Form->input('GodFaith');
            echo $this->Form->input('GodCondenced');
            echo $this->Form->input('Clergy');
            echo $this->Form->input('PreClergy');
            echo $this->Form->input('ClergyMarsPoint');
            echo $this->Form->input('ClergyApolloPoint');
            echo $this->Form->input('ClergyRabbiPoint');
            echo $this->Form->input('ClergyPeacePoint');
            echo $this->Form->input('ClergyCandidateType');
            echo $this->Form->input('Clergy4SeniorOrJunior');
            echo $this->Form->input('FamilyID');
            echo $this->Form->input('KeyCodeRewarded');
            echo $this->Form->input('TrainDate');
            echo $this->Form->input('TrainNum');
            echo $this->Form->input('award_point');
            echo $this->Form->input('award_flag');
            echo $this->Form->input('BrotherEndTime');
            echo $this->Form->input('BrotherTeacherID');
            echo $this->Form->input('PulseRemainTime');
            echo $this->Form->input('TigerTime');
            echo $this->Form->input('god_soul');
            echo $this->Form->input('monster_soul');
            echo $this->Form->input('god_point');
            echo $this->Form->input('monster_point');
            echo $this->Form->input('flower_num');
            echo $this->Form->input('egg_num');
            echo $this->Form->input('holy_value');
            echo $this->Form->input('role_hit_add');
            echo $this->Form->input('role_eei_all');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
