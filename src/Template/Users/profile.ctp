<div class="col-md-8">
    <div class="well">
        <h4><?= __('Profile Info') ?></h4>
        <div>
            <?= __('Account Created') ?>
            <?= $user->created ?>
        </div>
        <div>
            <?= __('Login Time') ?>
            <?= $user->last_login ?>
        </div>
        <div>
            <?= __('Logout Time') ?>
            <?= $user->last_logout ?>
        </div>
        <div>
            <?= __('User Role') ?>
            <?= $user->role ?>
        </div>
    </div>
</div>