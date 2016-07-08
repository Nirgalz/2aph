<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regions Model
 *
 * @method \App\Model\Entity\Region get($primaryKey, $options = [])
 * @method \App\Model\Entity\Region newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Region[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Region|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Region patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Region[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Region findOrCreate($search, callable $callback = null)
 */
class RegionsTable extends Table
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

        $this->table('regions');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->integer('zip_code')
            ->requirePresence('zip_code', 'create')
            ->notEmpty('zip_code');

        $validator
            ->requirePresence('website', 'create')
            ->notEmpty('website');

        $validator
            ->requirePresence('direction', 'create')
            ->notEmpty('direction');

        $validator
            ->requirePresence('responsible_name', 'create')
            ->notEmpty('responsible_name');

        $validator
            ->requirePresence('responsible_phone', 'create')
            ->notEmpty('responsible_phone');

        $validator
            ->requirePresence('responsible_email', 'create')
            ->notEmpty('responsible_email');

        $validator
            ->requirePresence('management_body', 'create')
            ->notEmpty('management_body');

        $validator
            ->allowEmpty('description');

        return $validator;
    }
}
