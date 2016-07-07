<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prepared Jobs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="preparedJobs form large-9 medium-8 columns content">
    <?= $this->Form->create($preparedJob) ?>
    <fieldset>
        <legend><?= __('Add Prepared Job') ?></legend>
        <?php
            echo $this->Form->input('region_id', ['options' => $regions]);
            echo $this->Form->input('frequent_jobs');
            echo $this->Form->input('others');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
