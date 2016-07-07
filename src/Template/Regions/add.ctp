<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?></li>
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
<div class="regions form large-9 medium-8 columns content">
    <?= $this->Form->create($region) ?>
    <fieldset>
        <legend><?= __('Add Region') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('type');
            echo $this->Form->input('street');
            echo $this->Form->input('city');
            echo $this->Form->input('zip_code');
            echo $this->Form->input('website');
            echo $this->Form->input('direction');
            echo $this->Form->input('responsible_name');
            echo $this->Form->input('responsible_phone');
            echo $this->Form->input('responsible_email');
            echo $this->Form->input('management_body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
