<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indicators Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Regions
 *
 * @method \App\Model\Entity\Indicator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Indicator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Indicator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Indicator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Indicator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Indicator findOrCreate($search, callable $callback = null)
 */
class IndicatorsTable extends Table
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

        $this->table('indicators');
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
            ->requirePresence('results', 'create')
            ->notEmpty('results');

        $validator
            ->requirePresence('strong_points', 'create')
            ->notEmpty('strong_points');

        $validator
            ->requirePresence('difficulties', 'create')
            ->notEmpty('difficulties');

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
