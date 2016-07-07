<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Indicator'), ['action' => 'edit', $indicator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Indicator'), ['action' => 'delete', $indicator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Indicators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Indicator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="indicators view large-9 medium-8 columns content">
    <h3><?= h($indicator->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $indicator->has('region') ? $this->Html->link($indicator->region->name, ['controller' => 'Regions', 'action' => 'view', $indicator->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($indicator->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Results') ?></h4>
        <?= $this->Text->autoParagraph(h($indicator->results)); ?>
    </div>
    <div class="row">
        <h4><?= __('Strong Points') ?></h4>
        <?= $this->Text->autoParagraph(h($indicator->strong_points)); ?>
    </div>
    <div class="row">
        <h4><?= __('Difficulties') ?></h4>
        <?= $this->Text->autoParagraph(h($indicator->difficulties)); ?>
    </div>
</div>
