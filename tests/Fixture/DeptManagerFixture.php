<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeptManagerFixture
 *
 */
class DeptManagerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dept_manager';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'emp_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dept_no' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'from_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'to_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'dept_no' => ['type' => 'index', 'columns' => ['dept_no'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['emp_no', 'dept_no'], 'length' => []],
            'dept_manager_ibfk_1' => ['type' => 'foreign', 'columns' => ['emp_no'], 'references' => ['employees', 'emp_no'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'dept_manager_ibfk_2' => ['type' => 'foreign', 'columns' => ['dept_no'], 'references' => ['departments', 'dept_no'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'emp_no' => 1,
            'dept_no' => '5d28169b-5637-401e-b8b6-9e9407d081c5',
            'from_date' => '2018-01-25',
            'to_date' => '2018-01-25'
        ],
    ];
}
