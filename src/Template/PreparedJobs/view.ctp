<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prepared Job'), ['action' => 'edit', $preparedJob->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prepared Job'), ['action' => 'delete', $preparedJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preparedJob->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prepared Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prepared Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="preparedJobs view large-9 medium-8 columns content">
    <h3><?= h($preparedJob->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $preparedJob->has('region') ? $this->Html->link($preparedJob->region->name, ['controller' => 'Regions', 'action' => 'view', $preparedJob->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($preparedJob->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Frequent Jobs') ?></h4>
        <?= $this->Text->autoParagraph(h($preparedJob->frequent_jobs)); ?>
    </div>
    <div class="row">
        <h4><?= __('Others') ?></h4>
        <?= $this->Text->autoParagraph(h($preparedJob->others)); ?>
    </div>
</div>
