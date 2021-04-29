<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class USVerificationsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $this->usAddress = array(
            'recipient' => 'LOB.COM',
            'primary_line' => '185 BERRY ST STE 6600',
            'city' => 'SAN FRANCISCO',
            'state' => 'CA',
            'zip_code' => '94107'
        );
    }

    public function testVerify()
    {
        $verifiedAddress = $this->lob->usVerifications()->verify($this->usAddress);

        $this->assertTrue(is_array($verifiedAddress));
        $this->assertTrue(array_key_exists('id', $verifiedAddress));
    }

    public function testVerifyCustomCase()
    {
        $query = array(
          'case' => 'proper'
        );

        $verifiedAddress = $this->lob->usVerifications()->verify($this->usAddress, $query);

        $this->assertTrue(is_array($verifiedAddress));
        $this->assertTrue(array_key_exists('id', $verifiedAddress));
    }

    /**
     * @expectedException Lob\Exception\ValidationException
     */
    public function testUnprocessibleEntity()
    {
        $this->lob->usVerifications()->verify(array());
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
        $this->lob->usVerifications()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
        $this->lob->usVerifications()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
        $this->lob->usVerifications()->create($this->usAddress);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
        $this->lob->usVerifications()->delete('id');
    }

}
