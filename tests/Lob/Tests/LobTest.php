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
use Lob\Resource\BankAccounts;
use Lob\Resource\Checks;
use Lob\Resource\IntlVerifications;
use Lob\Resource\Letters;
use Lob\Resource\Postcards;
use Lob\Resource\Routes;
use Lob\Resource\USVerifications;
use Lob\Resource\USZipLookups;

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

    public function testAddressesMethod()
    {
        $this->assertTrue($this->lob->addresses() instanceof Addresses);
    }

    public function testAreasMethod()
    {
        $this->assertTrue($this->lob->areas() instanceof Areas);
    }

    public function testBankAccountsMethod()
    {
        $this->assertTrue($this->lob->bankAccounts() instanceof BankAccounts);
    }

    public function testChecksMethod()
    {
        $this->assertTrue($this->lob->checks() instanceof Checks);
    }

    public function testIntlVerificationsMethod()
    {
        $this->assertTrue($this->lob->intlVerifications() instanceof IntlVerifications);
    }

    public function testLettersMethod()
    {
        $this->assertTrue($this->lob->letters() instanceof Letters);
    }

    public function testPostcardsMethod()
    {
        $this->assertTrue($this->lob->postcards() instanceof Postcards);
    }

    public function testRoutesMethod()
    {
        $this->assertTrue($this->lob->routes() instanceof Routes);
    }

    public function testUSVerificationsMethod()
    {
        $this->assertTrue($this->lob->usVerifications() instanceof USVerifications);
    }

    public function testUSZipLookupsMethod()
    {
        $this->assertTrue($this->lob->usZipLookups() instanceof USZipLookups);
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
