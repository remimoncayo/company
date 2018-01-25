<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CurrentDeptEmpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CurrentDeptEmpTable Test Case
 */
class CurrentDeptEmpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CurrentDeptEmpTable
     */
    public $CurrentDeptEmp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.current_dept_emp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CurrentDeptEmp') ? [] : ['className' => CurrentDeptEmpTable::class];
        $this->CurrentDeptEmp = TableRegistry::get('CurrentDeptEmp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CurrentDeptEmp);

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
