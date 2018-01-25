<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeptManager Model
 *
 * @method \App\Model\Entity\DeptManager get($primaryKey, $options = [])
 * @method \App\Model\Entity\DeptManager newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DeptManager[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DeptManager|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DeptManager patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DeptManager[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DeptManager findOrCreate($search, callable $callback = null, $options = [])
 */
class DeptManagerTable extends Table
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

        $this->setTable('dept_manager');
        $this->setDisplayField('emp_no');
        $this->setPrimaryKey(['emp_no', 'dept_no']);
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
            ->integer('emp_no')
            ->allowEmpty('emp_no', 'create');

        $validator
            ->scalar('dept_no')
            ->maxLength('dept_no', 4)
            ->allowEmpty('dept_no', 'create');

        $validator
            ->date('from_date')
            ->requirePresence('from_date', 'create')
            ->notEmpty('from_date');

        $validator
            ->date('to_date')
            ->requirePresence('to_date', 'create')
            ->notEmpty('to_date');

        return $validator;
    }
}
