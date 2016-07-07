<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Accompaniments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accompaniments form large-9 medium-8 columns content">
    <?= $this->Form->create($accompaniment) ?>
    <fieldset>
        <legend><?= __('Add Accompaniment') ?></legend>
        <?php
            echo $this->Form->input('region_id', ['options' => $regions]);
            echo $this->Form->input('upstream');
            echo $this->Form->input('while');
            echo $this->Form->input('downstream');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
