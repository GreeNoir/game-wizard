<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Wizard</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('main.css') ?>

    <?= $this->Html->Script('jquery-1.11.3.min.js') ?>
    <?= $this->Html->Script('bootstrap.min.js') ?>
    <?= $this->Html->Script('main.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Game Wizard</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li data-controller="Home"><?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index', 'lang' => $lang]) ?></li>
                <li data-controller="Users"><?= $this->Html->link(__('AddUser'), ['controller' => 'Users', 'action' => 'add', 'lang' => $lang]) ?></li>
                <li data-controller="AccountCommon"><?= $this->Html->link(__('ListAccountCommon'), ['controller' => 'AccountCommon', 'action' => 'index', 'lang' => $lang]); ?></li>
                <li data-controller="Roledata"><?= $this->Html->link(__('RoledataList'), ['controller' => 'Roledata', 'action' => 'index', 'lang' => $lang]); ?></li>
                <li><a href="#"><?= __('Contact') ?></a></li>
            </ul>
            <div class="language_select">
                <?= $this->Form->create('', ['type' => 'post', 'id' => 'language_form']) ?>
                <?= $this->Form->select('language', ['en' => 'English', 'ru' => 'Русский'], ['default' => $lang]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">
    <?= $this->fetch('content') ?>
</div>

<footer>
</footer>

<?=
    $this->Html->scriptBlock('
var controller = "'.$controller.'";

setMenuActive(controller);
');
?>

</body>
</html>
