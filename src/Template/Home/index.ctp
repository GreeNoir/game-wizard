<div>
    <div><?= __('PleaseSelectLanguage') ?></div>

    <?= $this->Form->create('', ['type' => 'get', 'id' => 'language_form']) ?>

    <?php echo $this->Form->select('lang', ['en' => 'English', 'ru' => 'Русский'], ['default' => $lang]) ?>

    <?= $this->Form->end() ?>
</div>

<div>
    <?= $this->Html->link(__('ListAccountCommon'), ['controller' => 'AccountCommon', 'action' => 'index']) ?>
</div>

<?= $this->Html->scriptBlock('
    $("select[name=lang]").change(function() {
        $("#language_form").submit();
    });
');
 ?>