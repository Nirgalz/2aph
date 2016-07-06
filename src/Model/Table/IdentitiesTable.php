<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Identities Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Regions
 *
 * @method \App\Model\Entity\Identity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Identity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Identity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Identity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Identity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Identity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Identity findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IdentitiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('identities');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('creation_date')
            ->requirePresence('creation_date', 'create')
            ->notEmpty('creation_date');

        $validator
            ->requirePresence('management_body', 'create')
            ->notEmpty('management_body');

        $validator
            ->requirePresence('financing', 'create')
            ->notEmpty('financing');

        $validator
            ->requirePresence('intervention_zone', 'create')
            ->notEmpty('intervention_zone');

        $validator
            ->requirePresence('youngs_number', 'create')
            ->notEmpty('youngs_number');

        $validator
            ->requirePresence('handicap_situation', 'create')
            ->notEmpty('handicap_situation');

        $validator
            ->requirePresence('provenance', 'create')
            ->notEmpty('provenance');

        $validator
            ->requirePresence('team', 'create')
            ->notEmpty('team');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        return $rules;
    }
}
