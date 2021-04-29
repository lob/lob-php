<?php

namespace Lob\Tests;

use InvalidArgumentException;
use Lob\Lob;
use Lob\Resource\Addresses;
use Lob\Resource\BankAccounts;
use Lob\Resource\Checks;
use Lob\Resource\IntlVerifications;
use Lob\Resource\Letters;
use Lob\Resource\Postcards;
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
        $this->lob = new Lob(getenv('LOB_API_KEY'));
    }

    public function testVersionDefaultValueIsNull()
    {
        $this->assertEquals(null, $this->lob->getVersion());
    }

    public function testAddressesMethod()
    {
        $this->assertTrue($this->lob->addresses() instanceof Addresses);
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

    public function testUSVerificationsMethod()
    {
        $this->assertTrue($this->lob->usVerifications() instanceof USVerifications);
    }

    public function testUSZipLookupsMethod()
    {
        $this->assertTrue($this->lob->usZipLookups() instanceof USZipLookups);
    }

    public function testSetApiKey()
    {
        $oldApiKey = $this->lob->getApiKey();
        $this->lob->setApiKey("hello world");
        $this->assertTrue($this->lob->getApiKey() === "hello world");
        $this->lob->setApiKey($oldApiKey);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetNullApiKey()
    {
        $this->lob->setApiKey(null);
    }

    /**
     * @expectedException Lob\Exception\AuthorizationException
     */
    public function testInvalidApiKey()
    {
        $lob = new Lob("bad_api_key");
        $lob->usVerifications()->verify(array(
            "primary_line" => "185 BERRY ST",
            "zip_code" => "94107"
        ));
    }

    public function testSpecificApiVersion()
    {
      $lob = new Lob(getenv('LOB_API_KEY'), "2017-11-08");
      $this->assertEquals($lob->getVersion(), "2017-11-08");
    }

}
