<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccompanimentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccompanimentsTable Test Case
 */
class AccompanimentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccompanimentsTable
     */
    public $Accompaniments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.accompaniments',
        'app.regions',
        'app.course_types',
        'app.identities',
        'app.indicators',
        'app.prepared_jobs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Accompaniments') ? [] : ['className' => 'App\Model\Table\AccompanimentsTable'];
        $this->Accompaniments = TableRegistry::get('Accompaniments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Accompaniments);

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
