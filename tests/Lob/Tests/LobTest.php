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

use Lob\Lob;
use Lob\Resource\Addresses;
use Lob\Resource\Jobs;
use Lob\Resource\Objects;
use Lob\Resource\Packagings;
use Lob\Resource\Postcards;
use Lob\Resource\Services;
use Lob\Resource\Settings;

class LobTest extends \PHPUnit_Framework_TestCase
{
    protected $lob;

    protected function setUp()
    {
        $this->lob = new Lob('test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc');
    }

    public function testVersionDefaultValueIsV1()
    {
        $this->assertEquals('v1', $this->lob->getVersion());
    }

    public function testAddressesMethodReturnsLobResourceAddressesClass()
    {
        $this->assertTrue($this->lob->addresses() instanceof Addresses);
    }

    public function testJobsMethodReturnsLobResourceJobsClass()
    {
        $this->assertTrue($this->lob->jobs() instanceof Jobs);
    }

    public function testObjectsMethodReturnsLobResourceObjectsClass()
    {
        $this->assertTrue($this->lob->objects() instanceof Objects);
    }

    public function testPackagingsMethodReturnsLobResourcePackagingsClass()
    {
        $this->assertTrue($this->lob->packagings() instanceof Packagings);
    }

    public function testPostcardsMethodReturnsLobResourcePostcardsClass()
    {
        $this->assertTrue($this->lob->postcards() instanceof Postcards);
    }

    public function testServicesMethodReturnsLobResourceServicesClass()
    {
        $this->assertTrue($this->lob->services() instanceof Services);
    }

    public function testSettingsMethodReturnsLobResourceSettingsClass()
    {
        $this->assertTrue($this->lob->settings() instanceof Settings);
    }
}
