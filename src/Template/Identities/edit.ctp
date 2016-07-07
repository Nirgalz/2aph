<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $identity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $identity->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Identities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="identities form large-9 medium-8 columns content">
    <?= $this->Form->create($identity) ?>
    <fieldset>
        <legend><?= __('Edit Identity') ?></legend>
        <?php
            echo $this->Form->input('region_id', ['options' => $regions]);
            echo $this->Form->input('creation_date');
            echo $this->Form->input('management_body');
            echo $this->Form->input('financing');
            echo $this->Form->input('intervention_zone');
            echo $this->Form->input('youngs_number');
            echo $this->Form->input('handicap_situation');
            echo $this->Form->input('provenance');
            echo $this->Form->input('team');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
