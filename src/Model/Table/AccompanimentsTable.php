<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accompaniments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Regions
 *
 * @method \App\Model\Entity\Accompaniment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Accompaniment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Accompaniment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Accompaniment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accompaniment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Accompaniment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Accompaniment findOrCreate($search, callable $callback = null)
 */
class AccompanimentsTable extends Table
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

        $this->table('accompaniments');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->requirePresence('upstream', 'create')
            ->notEmpty('upstream');

        $validator
            ->requirePresence('while', 'create')
            ->notEmpty('while');

        $validator
            ->requirePresence('downstream', 'create')
            ->notEmpty('downstream');

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
