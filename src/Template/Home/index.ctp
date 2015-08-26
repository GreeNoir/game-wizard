<div class="main">
    <div>
        <div><?= __('PleaseSelectLanguage') ?></div>
        <?= $this->Form->create('', ['type' => 'post', 'id' => 'language_form']) ?>
        <?= $this->Form->select('language', ['en' => 'English', 'ru' => 'Русский'], ['default' => $lang]) ?>
        <?= $this->Form->end() ?>
    </div>

    <?= $this->Html->scriptBlock('
    $("select[name=language]").change(function() {
    $("#language_form").submit();
    });
    '); ?>
</div>