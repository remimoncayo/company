<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CurrentDeptEmp Model
 *
 * @method \App\Model\Entity\CurrentDeptEmp get($primaryKey, $options = [])
 * @method \App\Model\Entity\CurrentDeptEmp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CurrentDeptEmp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CurrentDeptEmp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CurrentDeptEmp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CurrentDeptEmp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CurrentDeptEmp findOrCreate($search, callable $callback = null, $options = [])
 */
class CurrentDeptEmpTable extends Table
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

        $this->setTable('current_dept_emp');
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
            ->requirePresence('emp_no', 'create')
            ->notEmpty('emp_no');

        $validator
            ->scalar('dept_no')
            ->maxLength('dept_no', 4)
            ->requirePresence('dept_no', 'create')
            ->notEmpty('dept_no');

        $validator
            ->date('from_date')
            ->allowEmpty('from_date');

        $validator
            ->date('to_date')
            ->allowEmpty('to_date');

        return $validator;
    }
}
