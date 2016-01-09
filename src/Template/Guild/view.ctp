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
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="guild view large-10 medium-9 columns">
    <h2><?= h($guild->ID) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($guild->ID) ?></p>
            <h6 class="subheader"><?= __('FounderNameID') ?></h6>
            <p><?= $this->Number->format($guild->FounderNameID) ?></p>
            <h6 class="subheader"><?= __('LeaderID') ?></h6>
            <p><?= $this->Number->format($guild->LeaderID) ?></p>
            <h6 class="subheader"><?= __('SpecState') ?></h6>
            <p><?= $this->Number->format($guild->SpecState) ?></p>
            <h6 class="subheader"><?= __('Level') ?></h6>
            <p><?= $this->Number->format($guild->Level) ?></p>
            <h6 class="subheader"><?= __('HoldCity0') ?></h6>
            <p><?= $this->Number->format($guild->HoldCity0) ?></p>
            <h6 class="subheader"><?= __('HoldCity1') ?></h6>
            <p><?= $this->Number->format($guild->HoldCity1) ?></p>
            <h6 class="subheader"><?= __('HoldCity2') ?></h6>
            <p><?= $this->Number->format($guild->HoldCity2) ?></p>
            <h6 class="subheader"><?= __('Fund') ?></h6>
            <p><?= $this->Number->format($guild->Fund) ?></p>
            <h6 class="subheader"><?= __('Material') ?></h6>
            <p><?= $this->Number->format($guild->Material) ?></p>
            <h6 class="subheader"><?= __('Rep') ?></h6>
            <p><?= $this->Number->format($guild->Rep) ?></p>
            <h6 class="subheader"><?= __('DailyCost') ?></h6>
            <p><?= $this->Number->format($guild->DailyCost) ?></p>
            <h6 class="subheader"><?= __('Peace') ?></h6>
            <p><?= $this->Number->format($guild->Peace) ?></p>
            <h6 class="subheader"><?= __('Rank') ?></h6>
            <p><?= $this->Number->format($guild->Rank) ?></p>
            <h6 class="subheader"><?= __('GroupPurchase') ?></h6>
            <p><?= $this->Number->format($guild->GroupPurchase) ?></p>
            <h6 class="subheader"><?= __('RemainSpreadTimes') ?></h6>
            <p><?= $this->Number->format($guild->RemainSpreadTimes) ?></p>
            <h6 class="subheader"><?= __('GuildValue1') ?></h6>
            <p><?= $this->Number->format($guild->GuildValue1) ?></p>
            <h6 class="subheader"><?= __('GuildValue2') ?></h6>
            <p><?= $this->Number->format($guild->GuildValue2) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('CreateTime') ?></h6>
            <p><?= h($guild->CreateTime) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Commendation') ?></h6>
            <p><?= $guild->Commendation ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related City') ?></h4>
    <?php if (!empty($guild->city)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Guild Id') ?></th>
            <th><?= __('Defence') ?></th>
            <th><?= __('Eudemon Tally') ?></th>
            <th><?= __('Tax Rate') ?></th>
            <th><?= __('Tax Rate Time') ?></th>
            <th><?= __('Taxation') ?></th>
            <th><?= __('Prolificacy') ?></th>
            <th><?= __('Signup List') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guild->city as $city): ?>
        <tr>
            <td><?= h($city->id) ?></td>
            <td><?= h($city->guild_id) ?></td>
            <td><?= h($city->defence) ?></td>
            <td><?= h($city->eudemon_tally) ?></td>
            <td><?= h($city->tax_rate) ?></td>
            <td><?= h($city->tax_rate_time) ?></td>
            <td><?= h($city->taxation) ?></td>
            <td><?= h($city->prolificacy) ?></td>
            <td><?= h($city->signup_list) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'City', 'action' => 'view', $city->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'City', 'action' => 'edit', $city->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'City', 'action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Commerce Rank') ?></h4>
    <?php if (!empty($guild->commerce_rank)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Role Id') ?></th>
            <th><?= __('Guild Id') ?></th>
            <th><?= __('Times') ?></th>
            <th><?= __('Tael') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guild->commerce_rank as $commerceRank): ?>
        <tr>
            <td><?= h($commerceRank->role_id) ?></td>
            <td><?= h($commerceRank->guild_id) ?></td>
            <td><?= h($commerceRank->times) ?></td>
            <td><?= h($commerceRank->tael) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CommerceRank', 'action' => 'view', $commerceRank->role_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CommerceRank', 'action' => 'edit', $commerceRank->role_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CommerceRank', 'action' => 'delete', $commerceRank->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $commerceRank->role_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Skill') ?></h4>
    <?php if (!empty($guild->skill)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('RoleID') ?></th>
            <th><?= __('ID') ?></th>
            <th><?= __('BiddenLevel') ?></th>
            <th><?= __('SelfLevel') ?></th>
            <th><?= __('Proficiency') ?></th>
            <th><?= __('CoolDown') ?></th>
            <th><?= __('Active Time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($guild->skill as $skill): ?>
        <tr>
            <td><?= h($skill->RoleID) ?></td>
            <td><?= h($skill->ID) ?></td>
            <td><?= h($skill->BiddenLevel) ?></td>
            <td><?= h($skill->SelfLevel) ?></td>
            <td><?= h($skill->Proficiency) ?></td>
            <td><?= h($skill->CoolDown) ?></td>
            <td><?= h($skill->active_time) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Skill', 'action' => 'view', $skill->RoleID]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Skill', 'action' => 'edit', $skill->RoleID]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skill', 'action' => 'delete', $skill->RoleID], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->RoleID)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
