<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Identity'), ['action' => 'edit', $identity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Identity'), ['action' => 'delete', $identity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $identity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Identities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Identity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="identities view large-9 medium-8 columns content">
    <h3><?= h($identity->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $identity->has('region') ? $this->Html->link($identity->region->name, ['controller' => 'Regions', 'action' => 'view', $identity->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($identity->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Creation Date') ?></th>
            <td><?= h($identity->creation_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($identity->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Management Body') ?></h4>
        <?= $this->Text->autoParagraph(h($identity->management_body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Financing') ?></h4>
        <?= $this->Text->autoParagraph(h($identity->financing)); ?>
    </div>
    <div class="row">
        <h4><?= __('Intervention Zone') ?></h4>
        <?= $this->Text->autoParagraph(h($identity->intervention_zone)); ?>
    </div>
    <div class="row">
        <h4><?= __('Youngs Number') ?></h4>
        <?= $this->Text->autoParagraph(h($identity->youngs_number)); ?>
    </div>
    <div class="row">
        <h4><?= __('Handicap Situation') ?></h4>
        <?= $this->Text->autoParagraph(h($identity->handicap_situation)); ?>
    </div>
    <div class="row">
        <h4><?= __('Provenance') ?></h4>
        <?= $this->Text->autoParagraph(h($identity->provenance)); ?>
    </div>
    <div class="row">
        <h4><?= __('Team') ?></h4>
        <?= $this->Text->autoParagraph(h($identity->team)); ?>
    </div>
</div>
