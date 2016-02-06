<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit City'), ['action' => 'edit', $city->id]) ?> </li>
        <li><?= $this->Html->link(__('List City'), ['action' => 'index']) ?> </li>
    </ul>
</div>
<div class="city view columns">
    <h2><?= h($city->id) ?></h2>
    <div class="row">
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Guild Id') ?></div>
            <div class="col-sm-3"><?= $city->guild_id ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Defence') ?></div>
            <div class="col-sm-3"><?= $city->defence ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Eudemon Tally') ?></div>
            <div class="col-sm-3"><?= $city->eudemon_tally ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Tax Rate') ?></div>
            <div class="col-sm-3"><?= $city->tax_rate ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Tax Rate Time') ?></div>
            <div class="col-sm-3"><?= $city->tax_rate_time ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Taxation') ?></div>
            <div class="col-sm-3"><?= $city->taxation ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-3 subheader"><?= __('Prolificacy') ?></div>
            <div class="col-sm-3"><?= $city->prolificacy ?></div>
        </div>
    </div>
</div>
