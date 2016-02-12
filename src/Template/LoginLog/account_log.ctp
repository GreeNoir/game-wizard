<div class="actions">
    <h3><?=__('LoginLog').$accountName ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('ListLoginLog'), ['action' => 'index']) ?></li>
    </ul>
</div>

<div class="table-responsive col-lg-9">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
        <th>IP</th>
        <th>MAC</th>
        <th>Action</th>
        <th>Time</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($accountLogList as $logItem): ?>
        <tr>
            <td><?= $logItem->ip ?></td>
            <td><?= $logItem->mac ?></td>
            <td><?= $logItem->action ?></td>
            <td><?= $logItem->time ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>