<?php
namespace App\Test\TestCase\Controller;

use App\Controller\IdeInformationsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\IdeInformationsController Test Case
 *
 * @uses \App\Controller\IdeInformationsController
 */
class IdeInformationsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.IdeInformations',
    ];

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
