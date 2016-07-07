<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreparedJobsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreparedJobsTable Test Case
 */
class PreparedJobsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PreparedJobsTable
     */
    public $PreparedJobs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prepared_jobs',
        'app.regions',
        'app.accompaniments',
        'app.course_types',
        'app.identities',
        'app.indicators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PreparedJobs') ? [] : ['className' => 'App\Model\Table\PreparedJobsTable'];
        $this->PreparedJobs = TableRegistry::get('PreparedJobs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PreparedJobs);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
