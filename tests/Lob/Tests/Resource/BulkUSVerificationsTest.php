<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class BulkUSVerificationsTest extends TestCase
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
        $this->payload = array(
            'addresses' => array(
                $this->usAddress
            )
        );
    }

    public function testVerify()
    {
        $response = $this->lob->bulkUSVerifications()->verify($this->payload);
        var_dump($response);
        $addresses = $response["addresses"];
        $verifiedAddress = $addresses[0];
        $this->assertTrue(is_array($addresses));
        $this->assertTrue(array_key_exists('id', $verifiedAddress));
    }

    public function testVerifyCustomCase()
    {
        $query = array(
          'case' => 'proper'
        );

        $response = $this->lob->bulkUSVerifications()->verify($this->usAddress, $query);
        $addresses = $response["addresses"];
        $verifiedAddress = $addresses[0];
        $this->assertTrue(is_array($addresses));
        $this->assertTrue(array_key_exists('id', $verifiedAddress));
    }

    /**
     * @expectedException Lob\Exception\ValidationException
     */
    public function testUnprocessibleEntity()
    {
        $this->lob->bulkUSVerifications()->verify(array());
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
        $this->lob->bulkUSVerifications()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
        $this->lob->bulkUSVerifications()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
        $this->lob->bulkUSVerifications()->create($this->usAddress);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
        $this->lob->bulkUSVerifications()->delete('id');
    }

}
