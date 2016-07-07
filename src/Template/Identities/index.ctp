<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Identity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="identities index large-9 medium-8 columns content">
    <h3><?= __('Identities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('region_id') ?></th>
                <th><?= $this->Paginator->sort('creation_date') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($identities as $identity): ?>
            <tr>
                <td><?= $this->Number->format($identity->id) ?></td>
                <td><?= $identity->has('region') ? $this->Html->link($identity->region->name, ['controller' => 'Regions', 'action' => 'view', $identity->region->id]) : '' ?></td>
                <td><?= h($identity->creation_date) ?></td>
                <td><?= h($identity->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $identity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $identity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $identity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $identity->id)]) ?>
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
