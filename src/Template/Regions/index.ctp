<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accompaniments'), ['controller' => 'Accompaniments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Accompaniment'), ['controller' => 'Accompaniments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Course Types'), ['controller' => 'CourseTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course Type'), ['controller' => 'CourseTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Identities'), ['controller' => 'Identities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Identity'), ['controller' => 'Identities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Indicators'), ['controller' => 'Indicators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Indicator'), ['controller' => 'Indicators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prepared Jobs'), ['controller' => 'PreparedJobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prepared Job'), ['controller' => 'PreparedJobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regions index large-9 medium-8 columns content">
    <h3><?= __('Regions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('street') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('zip_code') ?></th>
                <th><?= $this->Paginator->sort('website') ?></th>
                <th><?= $this->Paginator->sort('direction') ?></th>
                <th><?= $this->Paginator->sort('responsible_name') ?></th>
                <th><?= $this->Paginator->sort('responsible_phone') ?></th>
                <th><?= $this->Paginator->sort('responsible_email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regions as $region): ?>
            <tr>
                <td><?= $this->Number->format($region->id) ?></td>
                <td><?= h($region->name) ?></td>
                <td><?= h($region->type) ?></td>
                <td><?= h($region->street) ?></td>
                <td><?= h($region->city) ?></td>
                <td><?= $this->Number->format($region->zip_code) ?></td>
                <td><?= h($region->website) ?></td>
                <td><?= h($region->direction) ?></td>
                <td><?= h($region->responsible_name) ?></td>
                <td><?= h($region->responsible_phone) ?></td>
                <td><?= h($region->responsible_email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $region->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $region->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id)]) ?>
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
