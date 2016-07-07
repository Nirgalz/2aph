


<h1><?= __('Connexion'); ?></h1>
<hr />
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <?= $this->Form->input('username', ['label' => 'username']) ?>
    <?= $this->Form->input('password', ['label' => 'password']) ?>
<?= $this->Form->submit(__('Connexion')); ?>
<?= $this->Form->end() ?>

<?= $this->Html->link(__('Add user'), ['controller' => 'users', 'action' => 'add']) ?>
