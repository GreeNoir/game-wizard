<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pet Data'), ['action' => 'edit', $petData->pet_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pet Data'), ['action' => 'delete', $petData->pet_id], ['confirm' => __('Are you sure you want to delete # {0}?', $petData->pet_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pet Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pet Data'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="petData view large-9 medium-8 columns content">
    <h2><div class="id"><?= h($petData->pet_id) ?></div></h2>
    <div class="row">
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Pet Name') ?></div>
            <div class="col-sm-3"><?= h($petData->pet_name) ?></div>
        </div>        
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Pet Value') ?></div>
            <div class="col-sm-3"><?= h($petData->pet_value) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Pet Pm') ?></div>
            <div class="col-sm-3"><?= h($petData->pet_pm) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Master Id') ?></div>
            <div class="col-sm-3"><?= h($petData->master_id) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Type Id') ?></div>
            <div class="col-sm-3"><?= h($petData->type_id) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Aptitude') ?></div>
            <div class="col-sm-3"><?= h($petData->aptitude) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Potential') ?></div>
            <div class="col-sm-3"><?= h($petData->potential) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Cur Spirit') ?></div>
            <div class="col-sm-3"><?= h($petData->cur_spirit) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Cur Exp') ?></div>
            <div class="col-sm-3"><?= h($petData->cur_exp) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Talent Count') ?></div>
            <div class="col-sm-3"><?= h($petData->talent_count) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Wuxing Energy') ?></div>
            <div class="col-sm-3"><?= h($petData->wuxing_energy) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Pet State') ?></div>
            <div class="col-sm-3"><?= h($petData->pet_state) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Birthday') ?></div>
            <div class="col-sm-3"><?= h($petData->birthday) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Live') ?></div>
            <div class="col-sm-3"><?= h($petData->live) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Lifeadded') ?></div>
            <div class="col-sm-3"><?= h($petData->lifeadded) ?></div>
        </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Quality') ?></div>
            <div class="col-sm-3"><?= $petData->quality ? __('Yes') : __('No'); ?></div>
         </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Step') ?></div>
            <div class="col-sm-3"><?= $petData->step ? __('Yes') : __('No'); ?></div>
         </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Grade') ?></div>
            <div class="col-sm-3"><?= $petData->grade ? __('Yes') : __('No'); ?></div>
         </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('Pet Lock') ?></div>
            <div class="col-sm-3"><?= $petData->pet_lock ? __('Yes') : __('No'); ?></div>
         </div>
        <div class="form-group col-sm-10">
            <div class="col-sm-2 subheader"><?= __('RemoveFlag') ?></div>
            <div class="col-sm-3"><?= $petData->RemoveFlag ? __('Yes') : __('No'); ?></div>
         </div>
    </div>
</div>
