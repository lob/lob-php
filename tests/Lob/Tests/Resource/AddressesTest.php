<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class AddressesTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $this->addressParams = array(
            'name' => 'Larry Lobster',
            'address_line1' => '185 Berry St',
            'address_line2' => 'Ste 6100',
            'address_city' => 'San Francisco',
            'address_state' => 'CA',
            'address_country' => 'US',
            'address_zip' => '94107',
            'email' => 'larry@lob.com'
        );
    }

    public function testCreate()
    {
        $address = $this->lob->addresses()->create($this->addressParams);

        $this->assertTrue(is_array($address));
        $this->assertTrue(array_key_exists('id', $address));
    }

    public function testDelete()
    {
        $address = $this->lob->addresses()->create($this->addressParams);
        $id = $address['id'];
        $deleted = $this->lob->addresses()->delete($id);
        $this->assertTrue(is_array($deleted));
    }

    public function testGet()
    {
        $id = $this->lob->addresses()->create($this->addressParams)['id'];
        $address = $this->lob->addresses()->get($id);

        $this->assertTrue(is_array($address));
        $this->assertTrue($address['id'] === $id);
    }

    public function testAll()
    {
        $addresses = $this->lob->addresses()->all();

        $this->assertTrue(is_array($addresses));
    }

}
