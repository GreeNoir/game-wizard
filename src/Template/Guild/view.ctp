<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Guild'), ['action' => 'edit', $guild->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Guild'), ['action' => 'delete', $guild->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $guild->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guild'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List City'), ['controller' => 'City', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'City', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Commerce Rank'), ['controller' => 'CommerceRank', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commerce Rank'), ['controller' => 'CommerceRank', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="guild view columns">
    <h2>ID#<?= h($guild->ID) ?></h2>
    <div class="row">
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('FounderNameID') ?></div>
            <div class="col-sm-3"><?= $guild->FounderNameID ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('LeaderID') ?></div>
            <div class="col-sm-3"><?= $guild->LeaderID ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('SpecState') ?></div>
            <div class="col-sm-3"><?= $guild->SpecState ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Level') ?></div>
            <div class="col-sm-3"><?= $guild->Level ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('HoldCity0') ?></div>
            <div class="col-sm-3"><?= $guild->HoldCity0 ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('HoldCity1') ?></div>
            <div class="col-sm-3"><?= $guild->HoldCity1 ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('HoldCity2') ?></div>
            <div class="col-sm-3"><?= $guild->HoldCity2 ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Fund') ?></div>
            <div class="col-sm-3"><?= $guild->Fund ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Material') ?></div>
            <div class="col-sm-3"><?= $guild->Material ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Rep') ?></div>
            <div class="col-sm-3"><?= $guild->Rep ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('DailyCost') ?></div>
            <div class="col-sm-3"><?= $guild->DailyCost ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Peace') ?></div>
            <div class="col-sm-3"><?= $guild->Peace ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Rank') ?></div>
            <div class="col-sm-3"><?= $guild->Rank ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('GroupPurchase') ?></div>
            <div class="col-sm-3"><?= $guild->GroupPurchase ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('RemainSpreadTimes') ?></div>
            <div class="col-sm-3"><?= $guild->RemainSpreadTimes ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('GuildValue1') ?></div>
            <div class="col-sm-3"><?= $guild->GuildValue1 ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('GuildValue2') ?></div>
            <div class="col-sm-3"><?= $guild->GuildValue2 ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('CreateTime') ?></div>
            <div class="col-sm-3"><?= h($guild->CreateTime) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Commendation') ?></div>
            <div class="col-sm-3"><?= $guild->Commendation ? __('Yes') : __('No'); ?></div>
        </div>
    </div>
</div>
<div class="related row">
    <div class="table-responsive col-lg-9">
    <h4 class="subheader"><?= __('Related City') ?></h4>
    <?php if (!empty($guild->city)): ?>
    <table class="table table-condensed table-bordered table-striped">
        <tr>
            <th class="ids"><?= __('Id') ?></th>
            <th class="ids"><?= __('Defence') ?></th>
            <th class="ids"><?= __('Eudemon Tally') ?></th>
            <th class="ids"><?= __('Tax Rate') ?></th>
            <th class="ids"><?= __('Tax Rate Time') ?></th>
            <th class="ids"><?= __('Taxation') ?></th>
            <th class="ids"><?= __('Prolificacy') ?></th>
            <th class="ids"><?= __('Signup List') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guild->city as $city): ?>
        <tr>
            <td class="ids"><?= h($city->id) ?></td>
            <td class="ids"><?= h($city->defence) ?></td>
            <td class="ids"><?= h($city->eudemon_tally) ?></td>
            <td class="ids"><?= h($city->tax_rate) ?></td>
            <td class="ids"><?= h($city->tax_rate_time) ?></td>
            <td class="ids"><?= h($city->taxation) ?></td>
            <td class="ids"><?= h($city->prolificacy) ?></td>
            <td class="ids"><?= h($city->signup_list) ?></td>
            <td class="actions">
                <div class="icon-contain-inline action"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['controller' => 'City', 'action' => 'edit', $city->id],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action"><?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']),
                    ['controller' => 'City', 'action' => 'delete', $city->id],
                    ['escape' => false,
                    'confirm' => __('Are you sure you want to delete # {0}?', $city->id)
                    ]) ?></div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="table-responsive col-lg-5">
    <h4 class="subheader"><?= __('Related Commerce Rank') ?></h4>
    <?php if (!empty($guild->commerce_rank)): ?>
    <table class="table table-condensed table-bordered table-striped">
        <tr>
            <th class="ids"><?= __('Role Id') ?></th>
            <th class="ids"><?= __('Times') ?></th>
            <th class="ids"><?= __('Tael') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guild->commerce_rank as $commerceRank): ?>
        <tr>
            <td class="ids"><?= h($commerceRank->role_id) ?></td>
            <td class="ids"><?= h($commerceRank->times) ?></td>
            <td class="ids"><?= h($commerceRank->tael) ?></td>
            <td class="actions">
                <div class="icon-contain-inline action"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['controller' => 'CommerceRank', 'action' => 'edit', $commerceRank->role_id],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action"><?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']),
                    ['controller' => 'CommerceRank', 'action' => 'delete', $commerceRank->role_id],
                    ['escape' => false,
                    'confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)
                    ]) ?></div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="table-responsive col-lg-5">
    <h4 class="subheader"><?= __('Related Guild Skill') ?></h4>
    <?php if (!empty($guild->guild_skill)): ?>
    <table class="table table-condensed table-bordered table-striped">
        <tr>
            <th><?= __('SkillID') ?></th>
            <th><?= __('Progress') ?></th>
            <th><?= __('Level') ?></th>
            <th><?= __('Researching') ?></th>
            <th><?= __('Active') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guild->guild_skill as $skill): ?>
        <tr>
            <td><?= h($skill->skill_id) ?></td>
            <td class="ids"><?= h($skill->progress) ?></td>
            <td class="ids"><?= h($skill->level) ?></td>
            <td><?= h($skill->researching) ?></td>
            <td class="ids"><?= h($skill->active) ?></td>
            <td class="actions">
                <div class="icon-contain-inline action"><?= $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-pencil']),
                    ['action' => 'edit_skill', '?' => ['guild_id' => $skill->guild_id, 'skill_id' => $skill->skill_id]],
                    ['escape' => false]) ?></div>
                <div class="icon-contain-inline action"><?= $this->Form->postLink(
                    $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']),
                    ['action' => 'delete_skill', $skill->skill_id],
                    ['escape' => false,
                    'confirm' => __('Are you sure you want to delete # {0}?', $skill->skill_id)
                    ]) ?></div>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
