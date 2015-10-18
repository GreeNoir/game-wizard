<div class="actions columns large-2 medium-3">
    <h3><?=__('Log').' AccountID#'.$accountID ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back').__('ListLoginLog'), ['action' => 'index']) ?></li>
    </ul>
</div>

<div class="account_log table-responsive">
    <table class="table table-bordered table-striped">
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