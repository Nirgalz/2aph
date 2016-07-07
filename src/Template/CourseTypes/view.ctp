<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course Type'), ['action' => 'edit', $courseType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course Type'), ['action' => 'delete', $courseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Course Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courseTypes view large-9 medium-8 columns content">
    <h3><?= h($courseType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $courseType->has('region') ? $this->Html->link($courseType->region->name, ['controller' => 'Regions', 'action' => 'view', $courseType->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($courseType->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($courseType->content)); ?>
    </div>
</div>
