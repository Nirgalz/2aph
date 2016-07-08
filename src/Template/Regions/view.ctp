<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regions view large-9 medium-8 columns content">
    <h3><?= h($region->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($region->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($region->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Street') ?></th>
            <td><?= h($region->street) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($region->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Website') ?></th>
            <td><?= h($region->website) ?></td>
        </tr>
        <tr>
            <th><?= __('Direction') ?></th>
            <td><?= h($region->direction) ?></td>
        </tr>
        <tr>
            <th><?= __('Responsible Name') ?></th>
            <td><?= h($region->responsible_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Responsible Phone') ?></th>
            <td><?= h($region->responsible_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Responsible Email') ?></th>
            <td><?= h($region->responsible_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($region->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip Code') ?></th>
            <td><?= $this->Number->format($region->zip_code) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Management Body') ?></h4>
        <?= $this->Text->autoParagraph(h($region->management_body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($region->description)); ?>
    </div>
</div>
