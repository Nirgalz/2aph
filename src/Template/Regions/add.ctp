<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?></li>
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
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
