<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class BulkIntlVerificationsTest extends TestCase
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
        $this->payload = array(
            'addresses' => array(
                $this->intlAddress
            )
        );
    }

    public function testVerify()
    {
        $response = $this->lob->bulkIntlVerifications()->verify($this->payload);
        var_dump($response);
        $addresses = $response["addresses"];
        $this->assertTrue(is_array($addresses));
        
        $verifiedAddress = $addresses[0];
        $this->assertTrue(array_key_exists('id', $verifiedAddress));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
        $this->lob->bulkIntlVerifications()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
        $this->lob->bulkIntlVerifications()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
        $this->lob->bulkIntlVerifications()->create($this->intlAddress);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
        $this->lob->bulkIntlVerifications()->delete('id');
    }

}
