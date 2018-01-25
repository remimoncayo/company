<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeptEmpLatestDate Model
 *
 * @method \App\Model\Entity\DeptEmpLatestDate get($primaryKey, $options = [])
 * @method \App\Model\Entity\DeptEmpLatestDate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DeptEmpLatestDate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DeptEmpLatestDate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DeptEmpLatestDate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DeptEmpLatestDate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DeptEmpLatestDate findOrCreate($search, callable $callback = null, $options = [])
 */
class DeptEmpLatestDateTable extends Table
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

        $this->setTable('dept_emp_latest_date');
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
            ->date('from_date')
            ->allowEmpty('from_date');

        $validator
            ->date('to_date')
            ->allowEmpty('to_date');

        return $validator;
    }
}
