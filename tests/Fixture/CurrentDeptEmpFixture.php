<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CurrentDeptEmpFixture
 *
 */
class CurrentDeptEmpFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'current_dept_emp';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'emp_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dept_no' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'from_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'to_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_options' => [
            'engine' => null,
            'collation' => null
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
            'dept_no' => 'Lo',
            'from_date' => '2018-01-25',
            'to_date' => '2018-01-25'
        ],
    ];
}
