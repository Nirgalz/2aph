<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Accompaniment'), ['action' => 'edit', $accompaniment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Accompaniment'), ['action' => 'delete', $accompaniment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accompaniment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accompaniments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Accompaniment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accompaniments view large-9 medium-8 columns content">
    <h3><?= h($accompaniment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $accompaniment->has('region') ? $this->Html->link($accompaniment->region->name, ['controller' => 'Regions', 'action' => 'view', $accompaniment->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($accompaniment->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Upstream') ?></h4>
        <?= $this->Text->autoParagraph(h($accompaniment->upstream)); ?>
    </div>
    <div class="row">
        <h4><?= __('While') ?></h4>
        <?= $this->Text->autoParagraph(h($accompaniment->while)); ?>
    </div>
    <div class="row">
        <h4><?= __('Downstream') ?></h4>
        <?= $this->Text->autoParagraph(h($accompaniment->downstream)); ?>
    </div>
</div>
