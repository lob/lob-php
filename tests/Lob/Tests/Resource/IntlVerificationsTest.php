<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class IntlVerificationsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $this->intlAddress = array(
            'primary_line' => '123 Test St',
            'city' => 'HEARST',
            'state' => 'ONTARIO',
            'postal_code' => 'P01LN0',
            'country' => 'CA'
        );
    }

    public function testVerify()
    {
        $verifiedAddress = $this->lob->intlVerifications()->verify($this->intlAddress);

        $this->assertTrue(is_array($verifiedAddress));
        $this->assertTrue(array_key_exists('id', $verifiedAddress));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
        $this->lob->intlVerifications()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
        $this->lob->intlVerifications()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
        $this->lob->intlVerifications()->create($this->intlAddress);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
        $this->lob->intlVerifications()->delete('id');
    }

}
