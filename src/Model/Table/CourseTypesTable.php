<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CourseTypes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Regions
 *
 * @method \App\Model\Entity\CourseType get($primaryKey, $options = [])
 * @method \App\Model\Entity\CourseType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CourseType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CourseType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CourseType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CourseType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CourseType findOrCreate($search, callable $callback = null)
 */
class CourseTypesTable extends Table
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

        $this->table('course_types');
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
            ->requirePresence('content', 'create')
            ->notEmpty('content');

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
