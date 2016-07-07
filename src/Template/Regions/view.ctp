<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accompaniments'), ['controller' => 'Accompaniments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Accompaniment'), ['controller' => 'Accompaniments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Course Types'), ['controller' => 'CourseTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course Type'), ['controller' => 'CourseTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Identities'), ['controller' => 'Identities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Identity'), ['controller' => 'Identities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Indicators'), ['controller' => 'Indicators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Indicator'), ['controller' => 'Indicators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prepared Jobs'), ['controller' => 'PreparedJobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prepared Job'), ['controller' => 'PreparedJobs', 'action' => 'add']) ?> </li>
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
    <div class="related">
        <h4><?= __('Related Accompaniments') ?></h4>
        <?php if (!empty($region->accompaniments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Region Id') ?></th>
                <th><?= __('Upstream') ?></th>
                <th><?= __('While') ?></th>
                <th><?= __('Downstream') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->accompaniments as $accompaniments): ?>
            <tr>
                <td><?= h($accompaniments->id) ?></td>
                <td><?= h($accompaniments->region_id) ?></td>
                <td><?= h($accompaniments->upstream) ?></td>
                <td><?= h($accompaniments->while) ?></td>
                <td><?= h($accompaniments->downstream) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accompaniments', 'action' => 'view', $accompaniments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accompaniments', 'action' => 'edit', $accompaniments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accompaniments', 'action' => 'delete', $accompaniments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accompaniments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Course Types') ?></h4>
        <?php if (!empty($region->course_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Region Id') ?></th>
                <th><?= __('Content') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->course_types as $courseTypes): ?>
            <tr>
                <td><?= h($courseTypes->id) ?></td>
                <td><?= h($courseTypes->region_id) ?></td>
                <td><?= h($courseTypes->content) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CourseTypes', 'action' => 'view', $courseTypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CourseTypes', 'action' => 'edit', $courseTypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CourseTypes', 'action' => 'delete', $courseTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Identities') ?></h4>
        <?php if (!empty($region->identities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Region Id') ?></th>
                <th><?= __('Creation Date') ?></th>
                <th><?= __('Management Body') ?></th>
                <th><?= __('Financing') ?></th>
                <th><?= __('Intervention Zone') ?></th>
                <th><?= __('Youngs Number') ?></th>
                <th><?= __('Handicap Situation') ?></th>
                <th><?= __('Provenance') ?></th>
                <th><?= __('Team') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->identities as $identities): ?>
            <tr>
                <td><?= h($identities->id) ?></td>
                <td><?= h($identities->region_id) ?></td>
                <td><?= h($identities->creation_date) ?></td>
                <td><?= h($identities->management_body) ?></td>
                <td><?= h($identities->financing) ?></td>
                <td><?= h($identities->intervention_zone) ?></td>
                <td><?= h($identities->youngs_number) ?></td>
                <td><?= h($identities->handicap_situation) ?></td>
                <td><?= h($identities->provenance) ?></td>
                <td><?= h($identities->team) ?></td>
                <td><?= h($identities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Identities', 'action' => 'view', $identities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Identities', 'action' => 'edit', $identities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Identities', 'action' => 'delete', $identities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $identities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Indicators') ?></h4>
        <?php if (!empty($region->indicators)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Region Id') ?></th>
                <th><?= __('Results') ?></th>
                <th><?= __('Strong Points') ?></th>
                <th><?= __('Difficulties') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->indicators as $indicators): ?>
            <tr>
                <td><?= h($indicators->id) ?></td>
                <td><?= h($indicators->region_id) ?></td>
                <td><?= h($indicators->results) ?></td>
                <td><?= h($indicators->strong_points) ?></td>
                <td><?= h($indicators->difficulties) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Indicators', 'action' => 'view', $indicators->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Indicators', 'action' => 'edit', $indicators->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Indicators', 'action' => 'delete', $indicators->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicators->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prepared Jobs') ?></h4>
        <?php if (!empty($region->prepared_jobs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Region Id') ?></th>
                <th><?= __('Frequent Jobs') ?></th>
                <th><?= __('Others') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->prepared_jobs as $preparedJobs): ?>
            <tr>
                <td><?= h($preparedJobs->id) ?></td>
                <td><?= h($preparedJobs->region_id) ?></td>
                <td><?= h($preparedJobs->frequent_jobs) ?></td>
                <td><?= h($preparedJobs->others) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PreparedJobs', 'action' => 'view', $preparedJobs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PreparedJobs', 'action' => 'edit', $preparedJobs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PreparedJobs', 'action' => 'delete', $preparedJobs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preparedJobs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
