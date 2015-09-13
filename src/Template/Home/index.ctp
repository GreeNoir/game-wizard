<div class="main">
    <div id="login_block">
        <?php if($is_authorized) { ?>
        <div>Hello, <?= $username ?> !</div>
        <div class="authorize_btn"><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></div>
        <?php } else { ?>
        <div class="authorize_btn"><?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?></div>
        <?php } ?>
    </div>
    <div class="clear"></div>

</div>