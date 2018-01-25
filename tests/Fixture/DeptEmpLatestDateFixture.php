<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeptEmpLatestDateFixture
 *
 */
class DeptEmpLatestDateFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dept_emp_latest_date';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'emp_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
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
            'from_date' => '2018-01-25',
            'to_date' => '2018-01-25'
        ],
    ];
}
