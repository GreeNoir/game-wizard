<div class="actions columns">

</div>
<div class="account view columns">
    <h2><i class="fa fa-fw fa-eye"></i><?= __('Monitoring for account')?><div class="id">ID#<?= h($account->id) ?></div></h2>
    <div class="row">
        <div class="columns strings">
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('name') ?></div>
                <div class="col-sm-3"><?= h($account->name) ?></div>
            </div>
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('privilege') ?></div>
                <div class="col-sm-3"><?= h($account->privilege) ?></div>
            </div>
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('login_status') ?></div>
                <div class="col-sm-3"><?= h($account->login_status) ?></div>
            </div>
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('worldname_crc') ?></div>
                <div class="col-sm-3"><?= h($account->worldname_crc) ?></div>
            </div>
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('forbid_mask') ?></div>
                <div class="col-sm-3"><?= h($account->forbid_mask) ?></div>
            </div>
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('mibao') ?></div>
                <div class="col-sm-3"><?= h($account->mibao) ?></div>
            </div>
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('time') ?></div>
                <div class="col-sm-3"><?= h($account->time) ?></div>
            </div>
            <div class="form-group col-sm-10">
                <div class="col-sm-2 subheader"><?= __('email') ?></div>
                <div class="col-sm-3"><?= h($account->email) ?></div>
            </div>
        </div>
    </div>

    <div class="account form">
    <?= $this->Form->create($account, ['class' => 'form-horizontal']) ?>
        <?= $this->Form->input('ip_ban', ['type' => 'checkbox', 'checked' => $isIpBanned ? 'checked' : '', 'class' => 'form-control', 'label' => ['text' => '<b>'.__('Ban IP').'</b><br/> ' .h($account->ip), 'class' => 'col-sm-2', 'escape' => false]]); ?>
        <?= $this->Form->input('mac_ban', ['type' => 'checkbox', 'checked' => $isMacBanned, 'class' => 'form-control', 'label' => ['text' => '<b>'.__('Ban MAC').'</b><br /> '.h($account->mac), 'class' => 'col-sm-2', 'escape' => false]]); ?>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
    </div>
</div>