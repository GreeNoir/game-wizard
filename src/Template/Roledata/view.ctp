<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit').__('Roledata'), ['action' => 'edit', $roledata->RoleID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete').__('Roledata'), ['action' => 'delete', $roledata->RoleID], ['confirm' => __('Are you sure you want to delete # {0}?', $roledata->RoleID)]) ?> </li>
        <li><?= $this->Html->link(__('List').__('Roledata'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New').__('Roledata'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="roledata view large-10 medium-9 columns">
    <h2><?= h($roledata->RoleID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('RoleName') ?></h6>
            <p><?= h($roledata->RoleName) ?></p>
            <h6 class="subheader"><?= __('CloseSGTime') ?></h6>
            <p><?= h($roledata->CloseSGTime) ?></p>
            <h6 class="subheader"><?= __('GetMallFreeTime') ?></h6>
            <p><?= h($roledata->GetMallFreeTime) ?></p>
            <h6 class="subheader"><?= __('CreateTime') ?></h6>
            <p><?= h($roledata->CreateTime) ?></p>
            <h6 class="subheader"><?= __('LoginTime') ?></h6>
            <p><?= h($roledata->LoginTime) ?></p>
            <h6 class="subheader"><?= __('LogoutTime') ?></h6>
            <p><?= h($roledata->LogoutTime) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('AccountID') ?></h6>
            <p><?= $this->Number->format($roledata->AccountID) ?></p>
            <h6 class="subheader"><?= __('RoleID') ?></h6>
            <p><?= $this->Number->format($roledata->RoleID) ?></p>
            <h6 class="subheader"><?= __('RoleNameCrc') ?></h6>
            <p><?= $this->Number->format($roledata->RoleNameCrc) ?></p>
            <h6 class="subheader"><?= __('Sex') ?></h6>
            <p><?= $this->Number->format($roledata->Sex) ?></p>
            <h6 class="subheader"><?= __('SpeakOff') ?></h6>
            <p><?= $this->Number->format($roledata->SpeakOff) ?></p>
            <h6 class="subheader"><?= __('HairModelID') ?></h6>
            <p><?= $this->Number->format($roledata->HairModelID) ?></p>
            <h6 class="subheader"><?= __('HairColorID') ?></h6>
            <p><?= $this->Number->format($roledata->HairColorID) ?></p>
            <h6 class="subheader"><?= __('FaceModelID') ?></h6>
            <p><?= $this->Number->format($roledata->FaceModelID) ?></p>
            <h6 class="subheader"><?= __('FaceDetailID') ?></h6>
            <p><?= $this->Number->format($roledata->FaceDetailID) ?></p>
            <h6 class="subheader"><?= __('DressModelID') ?></h6>
            <p><?= $this->Number->format($roledata->DressModelID) ?></p>
            <h6 class="subheader"><?= __('DisplaySet') ?></h6>
            <p><?= $this->Number->format($roledata->DisplaySet) ?></p>
            <h6 class="subheader"><?= __('MapID') ?></h6>
            <p><?= $this->Number->format($roledata->MapID) ?></p>
            <h6 class="subheader"><?= __('X') ?></h6>
            <p><?= $this->Number->format($roledata->X) ?></p>
            <h6 class="subheader"><?= __('Y') ?></h6>
            <p><?= $this->Number->format($roledata->Y) ?></p>
            <h6 class="subheader"><?= __('Z') ?></h6>
            <p><?= $this->Number->format($roledata->Z) ?></p>
            <h6 class="subheader"><?= __('FaceX') ?></h6>
            <p><?= $this->Number->format($roledata->FaceX) ?></p>
            <h6 class="subheader"><?= __('FaceY') ?></h6>
            <p><?= $this->Number->format($roledata->FaceY) ?></p>
            <h6 class="subheader"><?= __('FaceZ') ?></h6>
            <p><?= $this->Number->format($roledata->FaceZ) ?></p>
            <h6 class="subheader"><?= __('RebornMapID') ?></h6>
            <p><?= $this->Number->format($roledata->RebornMapID) ?></p>
            <h6 class="subheader"><?= __('Class') ?></h6>
            <p><?= $this->Number->format($roledata->Class) ?></p>
            <h6 class="subheader"><?= __('ClassEx') ?></h6>
            <p><?= $this->Number->format($roledata->ClassEx) ?></p>
            <h6 class="subheader"><?= __('LastUpgrade') ?></h6>
            <p><?= $this->Number->format($roledata->LastUpgrade) ?></p>
            <h6 class="subheader"><?= __('Level') ?></h6>
            <p><?= $this->Number->format($roledata->Level) ?></p>
            <h6 class="subheader"><?= __('WorkedLevel') ?></h6>
            <p><?= $this->Number->format($roledata->WorkedLevel) ?></p>
            <h6 class="subheader"><?= __('LevelPm') ?></h6>
            <p><?= $this->Number->format($roledata->LevelPm) ?></p>
            <h6 class="subheader"><?= __('ExpCurLevel') ?></h6>
            <p><?= $this->Number->format($roledata->ExpCurLevel) ?></p>
            <h6 class="subheader"><?= __('HP') ?></h6>
            <p><?= $this->Number->format($roledata->HP) ?></p>
            <h6 class="subheader"><?= __('MP') ?></h6>
            <p><?= $this->Number->format($roledata->MP) ?></p>
            <h6 class="subheader"><?= __('Rage') ?></h6>
            <p><?= $this->Number->format($roledata->Rage) ?></p>
            <h6 class="subheader"><?= __('Endurance') ?></h6>
            <p><?= $this->Number->format($roledata->Endurance) ?></p>
            <h6 class="subheader"><?= __('Vitality') ?></h6>
            <p><?= $this->Number->format($roledata->Vitality) ?></p>
            <h6 class="subheader"><?= __('Injury') ?></h6>
            <p><?= $this->Number->format($roledata->Injury) ?></p>
            <h6 class="subheader"><?= __('Knowledge') ?></h6>
            <p><?= $this->Number->format($roledata->Knowledge) ?></p>
            <h6 class="subheader"><?= __('Morale') ?></h6>
            <p><?= $this->Number->format($roledata->Morale) ?></p>
            <h6 class="subheader"><?= __('Morality') ?></h6>
            <p><?= $this->Number->format($roledata->Morality) ?></p>
            <h6 class="subheader"><?= __('Culture') ?></h6>
            <p><?= $this->Number->format($roledata->Culture) ?></p>
            <h6 class="subheader"><?= __('Credit') ?></h6>
            <p><?= $this->Number->format($roledata->Credit) ?></p>
            <h6 class="subheader"><?= __('Identity') ?></h6>
            <p><?= $this->Number->format($roledata->Identity) ?></p>
            <h6 class="subheader"><?= __('VIPPoint') ?></h6>
            <p><?= $this->Number->format($roledata->VIPPoint) ?></p>
            <h6 class="subheader"><?= __('Spirit') ?></h6>
            <p><?= $this->Number->format($roledata->Spirit) ?></p>
            <h6 class="subheader"><?= __('FixSpirit') ?></h6>
            <p><?= $this->Number->format($roledata->FixSpirit) ?></p>
            <h6 class="subheader"><?= __('WuXun') ?></h6>
            <p><?= $this->Number->format($roledata->WuXun) ?></p>
            <h6 class="subheader"><?= __('WuJi') ?></h6>
            <p><?= $this->Number->format($roledata->WuJi) ?></p>
            <h6 class="subheader"><?= __('Weary') ?></h6>
            <p><?= $this->Number->format($roledata->Weary) ?></p>
            <h6 class="subheader"><?= __('AttPtAvail') ?></h6>
            <p><?= $this->Number->format($roledata->AttPtAvail) ?></p>
            <h6 class="subheader"><?= __('TalentPtAvail') ?></h6>
            <p><?= $this->Number->format($roledata->TalentPtAvail) ?></p>
            <h6 class="subheader"><?= __('PhysiqueAdded') ?></h6>
            <p><?= $this->Number->format($roledata->PhysiqueAdded) ?></p>
            <h6 class="subheader"><?= __('StrengthAdded') ?></h6>
            <p><?= $this->Number->format($roledata->StrengthAdded) ?></p>
            <h6 class="subheader"><?= __('PneumaAdded') ?></h6>
            <p><?= $this->Number->format($roledata->PneumaAdded) ?></p>
            <h6 class="subheader"><?= __('InnerforceAdded') ?></h6>
            <p><?= $this->Number->format($roledata->InnerforceAdded) ?></p>
            <h6 class="subheader"><?= __('TechniqueAdded') ?></h6>
            <p><?= $this->Number->format($roledata->TechniqueAdded) ?></p>
            <h6 class="subheader"><?= __('AgilityAdded') ?></h6>
            <p><?= $this->Number->format($roledata->AgilityAdded) ?></p>
            <h6 class="subheader"><?= __('Strength') ?></h6>
            <p><?= $this->Number->format($roledata->Strength) ?></p>
            <h6 class="subheader"><?= __('StrengthNum') ?></h6>
            <p><?= $this->Number->format($roledata->StrengthNum) ?></p>
            <h6 class="subheader"><?= __('EquipValue') ?></h6>
            <p><?= $this->Number->format($roledata->EquipValue) ?></p>
            <h6 class="subheader"><?= __('EquipPm') ?></h6>
            <p><?= $this->Number->format($roledata->EquipPm) ?></p>
            <h6 class="subheader"><?= __('AdvanceStrength') ?></h6>
            <p><?= $this->Number->format($roledata->AdvanceStrength) ?></p>
            <h6 class="subheader"><?= __('ConsumptiveStrength') ?></h6>
            <p><?= $this->Number->format($roledata->ConsumptiveStrength) ?></p>
            <h6 class="subheader"><?= __('KillCount') ?></h6>
            <p><?= $this->Number->format($roledata->KillCount) ?></p>
            <h6 class="subheader"><?= __('TalentType1') ?></h6>
            <p><?= $this->Number->format($roledata->TalentType1) ?></p>
            <h6 class="subheader"><?= __('TalentType2') ?></h6>
            <p><?= $this->Number->format($roledata->TalentType2) ?></p>
            <h6 class="subheader"><?= __('TalentType3') ?></h6>
            <p><?= $this->Number->format($roledata->TalentType3) ?></p>
            <h6 class="subheader"><?= __('TalentType4') ?></h6>
            <p><?= $this->Number->format($roledata->TalentType4) ?></p>
            <h6 class="subheader"><?= __('TalentVal1') ?></h6>
            <p><?= $this->Number->format($roledata->TalentVal1) ?></p>
            <h6 class="subheader"><?= __('TalentVal2') ?></h6>
            <p><?= $this->Number->format($roledata->TalentVal2) ?></p>
            <h6 class="subheader"><?= __('TalentVal3') ?></h6>
            <p><?= $this->Number->format($roledata->TalentVal3) ?></p>
            <h6 class="subheader"><?= __('TalentVal4') ?></h6>
            <p><?= $this->Number->format($roledata->TalentVal4) ?></p>
            <h6 class="subheader"><?= __('BagSize') ?></h6>
            <p><?= $this->Number->format($roledata->BagSize) ?></p>
            <h6 class="subheader"><?= __('BagGold') ?></h6>
            <p><?= $this->Number->format($roledata->BagGold) ?></p>
            <h6 class="subheader"><?= __('BagSilver') ?></h6>
            <p><?= $this->Number->format($roledata->BagSilver) ?></p>
            <h6 class="subheader"><?= __('BagYuanBao') ?></h6>
            <p><?= $this->Number->format($roledata->BagYuanBao) ?></p>
            <h6 class="subheader"><?= __('ExchangeVolume') ?></h6>
            <p><?= $this->Number->format($roledata->ExchangeVolume) ?></p>
            <h6 class="subheader"><?= __('GuildID') ?></h6>
            <p><?= $this->Number->format($roledata->GuildID) ?></p>
            <h6 class="subheader"><?= __('TotalTax') ?></h6>
            <p><?= $this->Number->format($roledata->TotalTax) ?></p>
            <h6 class="subheader"><?= __('RemoteOpenSet') ?></h6>
            <p><?= $this->Number->format($roledata->RemoteOpenSet) ?></p>
            <h6 class="subheader"><?= __('CurTitleID') ?></h6>
            <p><?= $this->Number->format($roledata->CurTitleID) ?></p>
            <h6 class="subheader"><?= __('OnlineTime') ?></h6>
            <p><?= $this->Number->format($roledata->OnlineTime) ?></p>
            <h6 class="subheader"><?= __('CurOnlineTime') ?></h6>
            <p><?= $this->Number->format($roledata->CurOnlineTime) ?></p>
            <h6 class="subheader"><?= __('RemoveTime') ?></h6>
            <p><?= $this->Number->format($roledata->RemoveTime) ?></p>
            <h6 class="subheader"><?= __('TreasureSum') ?></h6>
            <p><?= $this->Number->format($roledata->TreasureSum) ?></p>
            <h6 class="subheader"><?= __('StallLevel') ?></h6>
            <p><?= $this->Number->format($roledata->StallLevel) ?></p>
            <h6 class="subheader"><?= __('StallDailyExp') ?></h6>
            <p><?= $this->Number->format($roledata->StallDailyExp) ?></p>
            <h6 class="subheader"><?= __('StallCurExp') ?></h6>
            <p><?= $this->Number->format($roledata->StallCurExp) ?></p>
            <h6 class="subheader"><?= __('StallLastTime') ?></h6>
            <p><?= $this->Number->format($roledata->StallLastTime) ?></p>
            <h6 class="subheader"><?= __('DeadUnSetSafeGuardCountDown') ?></h6>
            <p><?= $this->Number->format($roledata->DeadUnSetSafeGuardCountDown) ?></p>
            <h6 class="subheader"><?= __('ItemTransportMapID') ?></h6>
            <p><?= $this->Number->format($roledata->ItemTransportMapID) ?></p>
            <h6 class="subheader"><?= __('ItemTransportX') ?></h6>
            <p><?= $this->Number->format($roledata->ItemTransportX) ?></p>
            <h6 class="subheader"><?= __('ItemTransportZ') ?></h6>
            <p><?= $this->Number->format($roledata->ItemTransportZ) ?></p>
            <h6 class="subheader"><?= __('ItemTransportY') ?></h6>
            <p><?= $this->Number->format($roledata->ItemTransportY) ?></p>
            <h6 class="subheader"><?= __('LoverID') ?></h6>
            <p><?= $this->Number->format($roledata->LoverID) ?></p>
            <h6 class="subheader"><?= __('HaveWedding') ?></h6>
            <p><?= $this->Number->format($roledata->HaveWedding) ?></p>
            <h6 class="subheader"><?= __('LastLessingTime') ?></h6>
            <p><?= $this->Number->format($roledata->LastLessingTime) ?></p>
            <h6 class="subheader"><?= __('LastLessingLevel') ?></h6>
            <p><?= $this->Number->format($roledata->LastLessingLevel) ?></p>
            <h6 class="subheader"><?= __('NeedPrisonRevive') ?></h6>
            <p><?= $this->Number->format($roledata->NeedPrisonRevive) ?></p>
            <h6 class="subheader"><?= __('LastLessingLevelEx') ?></h6>
            <p><?= $this->Number->format($roledata->LastLessingLevelEx) ?></p>
            <h6 class="subheader"><?= __('LastLessingLoongDate') ?></h6>
            <p><?= $this->Number->format($roledata->LastLessingLoongDate) ?></p>
            <h6 class="subheader"><?= __('CurrentDayOnlineTime') ?></h6>
            <p><?= $this->Number->format($roledata->CurrentDayOnlineTime) ?></p>
            <h6 class="subheader"><?= __('OneDayFirstLoginedTime') ?></h6>
            <p><?= $this->Number->format($roledata->OneDayFirstLoginedTime) ?></p>
            <h6 class="subheader"><?= __('OnlineRewardPerDayRecTime') ?></h6>
            <p><?= $this->Number->format($roledata->OnlineRewardPerDayRecTime) ?></p>
            <h6 class="subheader"><?= __('MasterID') ?></h6>
            <p><?= $this->Number->format($roledata->MasterID) ?></p>
            <h6 class="subheader"><?= __('JingWuPoint') ?></h6>
            <p><?= $this->Number->format($roledata->JingWuPoint) ?></p>
            <h6 class="subheader"><?= __('QinWuPoint') ?></h6>
            <p><?= $this->Number->format($roledata->QinWuPoint) ?></p>
            <h6 class="subheader"><?= __('MARelation') ?></h6>
            <p><?= $this->Number->format($roledata->MARelation) ?></p>
            <h6 class="subheader"><?= __('FollowPetPocketValue') ?></h6>
            <p><?= $this->Number->format($roledata->FollowPetPocketValue) ?></p>
            <h6 class="subheader"><?= __('RidingPetPocketValue') ?></h6>
            <p><?= $this->Number->format($roledata->RidingPetPocketValue) ?></p>
            <h6 class="subheader"><?= __('MiraclePrcNum') ?></h6>
            <p><?= $this->Number->format($roledata->MiraclePrcNum) ?></p>
            <h6 class="subheader"><?= __('MiracleResetTime') ?></h6>
            <p><?= $this->Number->format($roledata->MiracleResetTime) ?></p>
            <h6 class="subheader"><?= __('GodMiraclePoints') ?></h6>
            <p><?= $this->Number->format($roledata->GodMiraclePoints) ?></p>
            <h6 class="subheader"><?= __('SoaringValue') ?></h6>
            <p><?= $this->Number->format($roledata->SoaringValue) ?></p>
            <h6 class="subheader"><?= __('SoaringSkillLearnTimes') ?></h6>
            <p><?= $this->Number->format($roledata->SoaringSkillLearnTimes) ?></p>
            <h6 class="subheader"><?= __('Toughness') ?></h6>
            <p><?= $this->Number->format($roledata->Toughness) ?></p>
            <h6 class="subheader"><?= __('CompleteRefreshTime') ?></h6>
            <p><?= $this->Number->format($roledata->CompleteRefreshTime) ?></p>
            <h6 class="subheader"><?= __('IMRefreshTime') ?></h6>
            <p><?= $this->Number->format($roledata->IMRefreshTime) ?></p>
            <h6 class="subheader"><?= __('ConsolidateTimes') ?></h6>
            <p><?= $this->Number->format($roledata->ConsolidateTimes) ?></p>
            <h6 class="subheader"><?= __('TrainStateTransfered') ?></h6>
            <p><?= $this->Number->format($roledata->TrainStateTransfered) ?></p>
            <h6 class="subheader"><?= __('RoleState') ?></h6>
            <p><?= $this->Number->format($roledata->RoleState) ?></p>
            <h6 class="subheader"><?= __('VipStartTime') ?></h6>
            <p><?= $this->Number->format($roledata->VipStartTime) ?></p>
            <h6 class="subheader"><?= __('FreeWorldTalkTimes') ?></h6>
            <p><?= $this->Number->format($roledata->FreeWorldTalkTimes) ?></p>
            <h6 class="subheader"><?= __('VipMaxDays') ?></h6>
            <p><?= $this->Number->format($roledata->VipMaxDays) ?></p>
            <h6 class="subheader"><?= __('YaoJingValue') ?></h6>
            <p><?= $this->Number->format($roledata->YaoJingValue) ?></p>
            <h6 class="subheader"><?= __('YListCompleteRefreshTime') ?></h6>
            <p><?= $this->Number->format($roledata->YListCompleteRefreshTime) ?></p>
            <h6 class="subheader"><?= __('YListIMRefreshTime') ?></h6>
            <p><?= $this->Number->format($roledata->YListIMRefreshTime) ?></p>
            <h6 class="subheader"><?= __('TakeGuildRewardTime') ?></h6>
            <p><?= $this->Number->format($roledata->TakeGuildRewardTime) ?></p>
            <h6 class="subheader"><?= __('ExpPilularUseTimes') ?></h6>
            <p><?= $this->Number->format($roledata->ExpPilularUseTimes) ?></p>
            <h6 class="subheader"><?= __('PickupModeSetting') ?></h6>
            <p><?= $this->Number->format($roledata->PickupModeSetting) ?></p>
            <h6 class="subheader"><?= __('PlayerBackDays') ?></h6>
            <p><?= $this->Number->format($roledata->PlayerBackDays) ?></p>
            <h6 class="subheader"><?= __('BePlayActLayerID') ?></h6>
            <p><?= $this->Number->format($roledata->BePlayActLayerID) ?></p>
            <h6 class="subheader"><?= __('BePlayActLevel') ?></h6>
            <p><?= $this->Number->format($roledata->BePlayActLevel) ?></p>
            <h6 class="subheader"><?= __('GodHead') ?></h6>
            <p><?= $this->Number->format($roledata->GodHead) ?></p>
            <h6 class="subheader"><?= __('GodFaith') ?></h6>
            <p><?= $this->Number->format($roledata->GodFaith) ?></p>
            <h6 class="subheader"><?= __('GodCondenced') ?></h6>
            <p><?= $this->Number->format($roledata->GodCondenced) ?></p>
            <h6 class="subheader"><?= __('Clergy') ?></h6>
            <p><?= $this->Number->format($roledata->Clergy) ?></p>
            <h6 class="subheader"><?= __('PreClergy') ?></h6>
            <p><?= $this->Number->format($roledata->PreClergy) ?></p>
            <h6 class="subheader"><?= __('ClergyMarsPoint') ?></h6>
            <p><?= $this->Number->format($roledata->ClergyMarsPoint) ?></p>
            <h6 class="subheader"><?= __('ClergyApolloPoint') ?></h6>
            <p><?= $this->Number->format($roledata->ClergyApolloPoint) ?></p>
            <h6 class="subheader"><?= __('ClergyRabbiPoint') ?></h6>
            <p><?= $this->Number->format($roledata->ClergyRabbiPoint) ?></p>
            <h6 class="subheader"><?= __('ClergyPeacePoint') ?></h6>
            <p><?= $this->Number->format($roledata->ClergyPeacePoint) ?></p>
            <h6 class="subheader"><?= __('ClergyCandidateType') ?></h6>
            <p><?= $this->Number->format($roledata->ClergyCandidateType) ?></p>
            <h6 class="subheader"><?= __('Clergy4SeniorOrJunior') ?></h6>
            <p><?= $this->Number->format($roledata->Clergy4SeniorOrJunior) ?></p>
            <h6 class="subheader"><?= __('FamilyID') ?></h6>
            <p><?= $this->Number->format($roledata->FamilyID) ?></p>
            <h6 class="subheader"><?= __('KeyCodeRewarded') ?></h6>
            <p><?= $this->Number->format($roledata->KeyCodeRewarded) ?></p>
            <h6 class="subheader"><?= __('TrainDate') ?></h6>
            <p><?= $this->Number->format($roledata->TrainDate) ?></p>
            <h6 class="subheader"><?= __('TrainNum') ?></h6>
            <p><?= $this->Number->format($roledata->TrainNum) ?></p>
            <h6 class="subheader"><?= __('Award Point') ?></h6>
            <p><?= $this->Number->format($roledata->award_point) ?></p>
            <h6 class="subheader"><?= __('Award Flag') ?></h6>
            <p><?= $this->Number->format($roledata->award_flag) ?></p>
            <h6 class="subheader"><?= __('BrotherEndTime') ?></h6>
            <p><?= $this->Number->format($roledata->BrotherEndTime) ?></p>
            <h6 class="subheader"><?= __('BrotherTeacherID') ?></h6>
            <p><?= $this->Number->format($roledata->BrotherTeacherID) ?></p>
            <h6 class="subheader"><?= __('PulseRemainTime') ?></h6>
            <p><?= $this->Number->format($roledata->PulseRemainTime) ?></p>
            <h6 class="subheader"><?= __('TigerTime') ?></h6>
            <p><?= $this->Number->format($roledata->TigerTime) ?></p>
            <h6 class="subheader"><?= __('God Soul') ?></h6>
            <p><?= $this->Number->format($roledata->god_soul) ?></p>
            <h6 class="subheader"><?= __('Monster Soul') ?></h6>
            <p><?= $this->Number->format($roledata->monster_soul) ?></p>
            <h6 class="subheader"><?= __('God Point') ?></h6>
            <p><?= $this->Number->format($roledata->god_point) ?></p>
            <h6 class="subheader"><?= __('Monster Point') ?></h6>
            <p><?= $this->Number->format($roledata->monster_point) ?></p>
            <h6 class="subheader"><?= __('Flower Num') ?></h6>
            <p><?= $this->Number->format($roledata->flower_num) ?></p>
            <h6 class="subheader"><?= __('Egg Num') ?></h6>
            <p><?= $this->Number->format($roledata->egg_num) ?></p>
            <h6 class="subheader"><?= __('Holy Value') ?></h6>
            <p><?= $this->Number->format($roledata->holy_value) ?></p>
            <h6 class="subheader"><?= __('Role Hit Add') ?></h6>
            <p><?= $this->Number->format($roledata->role_hit_add) ?></p>
            <h6 class="subheader"><?= __('Role Eei All') ?></h6>
            <p><?= $this->Number->format($roledata->role_eei_all) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('SGFlag') ?></h6>
            <p><?= $roledata->SGFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('RemoveFlag') ?></h6>
            <p><?= $roledata->RemoveFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Hostility') ?></h6>
            <p><?= $roledata->Hostility ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('OfflineExperienceRewardFlag') ?></h6>
            <p><?= $roledata->OfflineExperienceRewardFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('VipLevel') ?></h6>
            <p><?= $roledata->VipLevel ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('CanRankFlag') ?></h6>
            <p><?= $roledata->CanRankFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Buy50LvlItemFlag') ?></h6>
            <p><?= $roledata->Buy50LvlItemFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Buy60LvlItemFlag') ?></h6>
            <p><?= $roledata->Buy60LvlItemFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Buy70LvlItemFlag') ?></h6>
            <p><?= $roledata->Buy70LvlItemFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Buy80LvlItemFlag') ?></h6>
            <p><?= $roledata->Buy80LvlItemFlag ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('PlayerBack') ?></h6>
            <p><?= $roledata->PlayerBack ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('UseConstraintsMaxPKSafeGuardLevel') ?></h6>
            <p><?= $roledata->UseConstraintsMaxPKSafeGuardLevel ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
