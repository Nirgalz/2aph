<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Accompaniment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accompaniments index large-9 medium-8 columns content">
    <h3><?= __('Accompaniments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('region_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accompaniments as $accompaniment): ?>
            <tr>
                <td><?= $this->Number->format($accompaniment->id) ?></td>
                <td><?= $accompaniment->has('region') ? $this->Html->link($accompaniment->region->name, ['controller' => 'Regions', 'action' => 'view', $accompaniment->region->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $accompaniment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accompaniment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accompaniment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accompaniment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
