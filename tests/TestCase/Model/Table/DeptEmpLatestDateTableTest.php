<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeptEmpLatestDateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeptEmpLatestDateTable Test Case
 */
class DeptEmpLatestDateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeptEmpLatestDateTable
     */
    public $DeptEmpLatestDate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dept_emp_latest_date'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DeptEmpLatestDate') ? [] : ['className' => DeptEmpLatestDateTable::class];
        $this->DeptEmpLatestDate = TableRegistry::get('DeptEmpLatestDate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeptEmpLatestDate);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
