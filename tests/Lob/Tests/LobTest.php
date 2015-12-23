<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lob\Tests;

use InvalidArgumentException;
use Lob\Lob;
use Lob\Resource\Addresses;
use Lob\Resource\Areas;
use Lob\Resource\Jobs;
use Lob\Resource\Objects;
use Lob\Resource\Postcards;
use Lob\Resource\Routes;
use Lob\Resource\Settings;
use Lob\Resource\States;

class LobTest extends \PHPUnit_Framework_TestCase
{
    protected $lob;

    /**
    * @expectedException InvalidArgumentException
    */
    public function setUpFail()
    {
        $this->badLob = new Lob(1995);
    }

    protected function setUp()
    {
        $this->lob = new Lob('test_7c5d111af5ccfedb9f0eea91745c93896a1');
    }

    public function testVersionDefaultValueIsNull()
    {
        $this->assertEquals(null, $this->lob->getVersion());
    }

    public function testAddressesMethodReturnsLobResourceAddressesClass()
    {
        $this->assertTrue($this->lob->addresses() instanceof Addresses);
    }

    public function testAreasMethodReturnsLobResourceAreasClass()
    {
        $this->assertTrue($this->lob->areas() instanceof Areas);
    }

    public function testJobsMethodReturnsLobResourceJobsClass()
    {
        $this->assertTrue($this->lob->jobs() instanceof Jobs);
    }

    public function testObjectsMethodReturnsLobResourceObjectsClass()
    {
        $this->assertTrue($this->lob->objects() instanceof Objects);
    }

    public function testPostcardsMethodReturnsLobResourcePostcardsClass()
    {
        $this->assertTrue($this->lob->postcards() instanceof Postcards);
    }

    public function testRoutesMethodReturnsLobResourceAreasClass()
    {
        $this->assertTrue($this->lob->routes() instanceof Routes);
    }

    public function testSettingsMethodReturnsLobResourceSettingsClass()
    {
        $this->assertTrue($this->lob->settings() instanceof Settings);
    }

    public function testStatesMethodReturnsLobResourceStatesClass()
    {
        $this->assertTrue($this->lob->states() instanceof States);
    }

    public function testSetApiKeyMethodSetsApiKey()
    {
        $oldApiKey = $this->lob->getApiKey();
        $this->lob->setApiKey("hello world");
        $this->assertTrue($this->lob->getApiKey() === "hello world");
        $this->lob->setApiKey($oldApiKey);
    }

    public function testSetApiKeyMethodWithBadApiKey()
    {
        $this->setExpectedException('InvalidArgumentException');
        $this->lob->setApiKey(null);
    }

}
