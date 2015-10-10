<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit').__('Roledata'), ['action' => 'edit', $roledata->RoleID]) ?></li>
        <li><?= $this->Form->postLink(__('Delete').__('Roledata'), ['action' => 'delete', $roledata->RoleID], ['confirm'
            => __('Are you sure you want to delete # {0}?', $roledata->RoleID)]) ?>
        </li>
        <li><?= $this->Html->link(__('List').__('Roledata'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New').__('Roledata'), ['action' => 'add']) ?></li>
    </ul>
</div>

<div class="roledata view large-10 medium-9 columns">
<h2><?= h($roledata->RoleID) ?></h2>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#panel_strings"><?= __('String parameters') ?></a></li>
    <li><a data-toggle="tab" href="#panel_numbers"><?= __('Number parameters') ?></a></li>
    <li><a data-toggle="tab" href="#panel_booleans"><?= __('Boolean parameters') ?></a></li>
</ul>

<div class="tab-content">

    <div id="panel_strings" class="strings tab-pane fade in active">
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RoleName') ?></div>
            <div class="col-sm-3"><?= h($roledata->RoleName) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('CloseSGTime') ?></div>
            <div class="col-sm-3"><?= h($roledata->CloseSGTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('GetMallFreeTime') ?></div>
            <div class="col-sm-3"><?= h($roledata->GetMallFreeTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('CreateTime') ?></div>
            <div class="col-sm-3"><?= h($roledata->CreateTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LoginTime') ?></div>
            <div class="col-sm-3"><?= h($roledata->LoginTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LogoutTime') ?></div>
            <div class="col-sm-3"><?= h($roledata->LogoutTime) ?></div>
        </div>
    </div>
    <div id="panel_numbers" class="numbers tab-pane fade in">
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('AccountID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->AccountID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RoleID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->RoleID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RoleNameCrc') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->RoleNameCrc) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Sex') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Sex) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('SpeakOff') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->SpeakOff) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('HairModelID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->HairModelID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('HairColorID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->HairColorID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FaceModelID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FaceModelID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FaceDetailID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FaceDetailID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('DressModelID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->DressModelID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('DisplaySet') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->DisplaySet) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('MapID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->MapID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('X') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->X) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Y') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Y) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Z') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Z) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FaceX') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FaceX) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FaceY') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FaceY) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FaceZ') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FaceZ) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RebornMapID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->RebornMapID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Class') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Class) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ClassEx') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ClassEx) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LastUpgrade') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->LastUpgrade) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Level') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Level) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('WorkedLevel') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->WorkedLevel) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LevelPm') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->LevelPm) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ExpCurLevel') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ExpCurLevel) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('HP') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->HP) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('MP') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->MP) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Rage') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Rage) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Endurance') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Endurance) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Vitality') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Vitality) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Injury') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Injury) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Knowledge') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Knowledge) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Morale') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Morale) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Morality') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Morality) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Culture') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Culture) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Credit') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Credit) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Identity') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Identity) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('VIPPoint') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->VIPPoint) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Spirit') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Spirit) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FixSpirit') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FixSpirit) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('WuXun') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->WuXun) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('WuJi') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->WuJi) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Weary') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Weary) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('AttPtAvail') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->AttPtAvail) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentPtAvail') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentPtAvail) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('PhysiqueAdded') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->PhysiqueAdded) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('StrengthAdded') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->StrengthAdded) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('PneumaAdded') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->PneumaAdded) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('InnerforceAdded') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->InnerforceAdded) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TechniqueAdded') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TechniqueAdded) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('AgilityAdded') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->AgilityAdded) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Strength') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Strength) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('StrengthNum') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->StrengthNum) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('EquipValue') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->EquipValue) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('EquipPm') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->EquipPm) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('AdvanceStrength') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->AdvanceStrength) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ConsumptiveStrength') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ConsumptiveStrength) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('KillCount') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->KillCount) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentType1') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentType1) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentType2') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentType2) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentType3') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentType3) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentType4') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentType4) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentVal1') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentVal1) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentVal2') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentVal2) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentVal3') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentVal3) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TalentVal4') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TalentVal4) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BagSize') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BagSize) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BagGold') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BagGold) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BagSilver') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BagSilver) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BagYuanBao') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BagYuanBao) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ExchangeVolume') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ExchangeVolume) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('GuildID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->GuildID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TotalTax') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TotalTax) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RemoteOpenSet') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->RemoteOpenSet) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('CurTitleID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->CurTitleID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('OnlineTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->OnlineTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('CurOnlineTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->CurOnlineTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RemoveTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->RemoveTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TreasureSum') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TreasureSum) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('StallLevel') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->StallLevel) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('StallDailyExp') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->StallDailyExp) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('StallCurExp') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->StallCurExp) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('StallLastTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->StallLastTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('DeadUnSetSafeGuardCountDown') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->DeadUnSetSafeGuardCountDown) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ItemTransportMapID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ItemTransportMapID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ItemTransportX') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ItemTransportX) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ItemTransportZ') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ItemTransportZ) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ItemTransportY') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ItemTransportY) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LoverID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->LoverID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('HaveWedding') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->HaveWedding) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LastLessingTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->LastLessingTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LastLessingLevel') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->LastLessingLevel) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('NeedPrisonRevive') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->NeedPrisonRevive) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LastLessingLevelEx') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->LastLessingLevelEx) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('LastLessingLoongDate') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->LastLessingLoongDate) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('CurrentDayOnlineTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->CurrentDayOnlineTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('OneDayFirstLoginedTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->OneDayFirstLoginedTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('OnlineRewardPerDayRecTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->OnlineRewardPerDayRecTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('MasterID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->MasterID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('JingWuPoint') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->JingWuPoint) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('QinWuPoint') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->QinWuPoint) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('MARelation') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->MARelation) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FollowPetPocketValue') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FollowPetPocketValue) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RidingPetPocketValue') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->RidingPetPocketValue) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('MiraclePrcNum') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->MiraclePrcNum) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('MiracleResetTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->MiracleResetTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('GodMiraclePoints') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->GodMiraclePoints) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('SoaringValue') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->SoaringValue) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('SoaringSkillLearnTimes') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->SoaringSkillLearnTimes) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Toughness') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Toughness) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('CompleteRefreshTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->CompleteRefreshTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('IMRefreshTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->IMRefreshTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ConsolidateTimes') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ConsolidateTimes) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TrainStateTransfered') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TrainStateTransfered) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RoleState') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->RoleState) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('VipStartTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->VipStartTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FreeWorldTalkTimes') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FreeWorldTalkTimes) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('VipMaxDays') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->VipMaxDays) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('YaoJingValue') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->YaoJingValue) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('YListCompleteRefreshTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->YListCompleteRefreshTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('YListIMRefreshTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->YListIMRefreshTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TakeGuildRewardTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TakeGuildRewardTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ExpPilularUseTimes') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ExpPilularUseTimes) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('PickupModeSetting') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->PickupModeSetting) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('PlayerBackDays') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->PlayerBackDays) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BePlayActLayerID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BePlayActLayerID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BePlayActLevel') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BePlayActLevel) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('GodHead') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->GodHead) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('GodFaith') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->GodFaith) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('GodCondenced') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->GodCondenced) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Clergy') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Clergy) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('PreClergy') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->PreClergy) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ClergyMarsPoint') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ClergyMarsPoint) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ClergyApolloPoint') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ClergyApolloPoint) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ClergyRabbiPoint') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ClergyRabbiPoint) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ClergyPeacePoint') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ClergyPeacePoint) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('ClergyCandidateType') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->ClergyCandidateType) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Clergy4SeniorOrJunior') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->Clergy4SeniorOrJunior) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('FamilyID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->FamilyID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('KeyCodeRewarded') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->KeyCodeRewarded) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TrainDate') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TrainDate) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TrainNum') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TrainNum) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Award Point') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->award_point) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Award Flag') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->award_flag) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BrotherEndTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BrotherEndTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('BrotherTeacherID') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->BrotherTeacherID) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('PulseRemainTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->PulseRemainTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('TigerTime') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->TigerTime) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('God Soul') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->god_soul) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Monster Soul') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->monster_soul) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('God Point') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->god_point) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Monster Point') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->monster_point) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Flower Num') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->flower_num) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Egg Num') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->egg_num) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Holy Value') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->holy_value) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Role Hit Add') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->role_hit_add) ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Role Eei All') ?></div>
            <div class="col-sm-3"><?= $this->Number->format($roledata->role_eei_all) ?></div>
        </div>
    </div>
    <div id="panel_booleans" class="booleans tab-pane fade in">
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('SGFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->SGFlag ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('RemoveFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->RemoveFlag ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Hostility') ?></div>
            <div class="col-sm-3"><?= $roledata->Hostility ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('OfflineExperienceRewardFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->OfflineExperienceRewardFlag ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('VipLevel') ?></div>
            <div class="col-sm-3"><?= $roledata->VipLevel ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('CanRankFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->CanRankFlag ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Buy50LvlItemFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->Buy50LvlItemFlag ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Buy60LvlItemFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->Buy60LvlItemFlag ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Buy70LvlItemFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->Buy70LvlItemFlag ? __('Yes') : __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('Buy80LvlItemFlag') ?></div>
            <div class="col-sm-3"><?= $roledata->Buy80LvlItemFlag? __('Yes'): __('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('PlayerBack') ?></div>
            <div class="col-sm-3"><?= $roledata->PlayerBack? __('Yes'):__('No'); ?></div>
        </div>
        <div class="form-group col-sm-11">
            <div class="col-sm-3 subheader"><?= __('UseConstraintsMaxPKSafeGuardLevel') ?></div>
            <div class="col-sm-3"><?= $roledata->UseConstraintsMaxPKSafeGuardLevel? __('Yes') : __('No');?></div>
        </div>
    </div>

</div>

</div>