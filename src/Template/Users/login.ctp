<div class="main">
    <div class="users form">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create('User', [
                'autocomplete' => 'off'
            ]) ?>
        <legend><?= __('Please login'); ?></legend>
        <fieldset>
            <?= $this->Form->input('username',[
                'label' => __('Username'),
                'autocomplete' => 'off'
            ]) ?>
            <div class="clear"></div>
            <?= $this->Form->input('password', [
                'label' => __('Password')]) ?>
            <div class="clear"></div>
        </fieldset>
        <div class="button_block">
            <?= $this->Form->button(__('Login')); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>