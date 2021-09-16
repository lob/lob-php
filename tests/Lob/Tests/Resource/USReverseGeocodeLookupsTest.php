<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class USReverseGeocodeLookupsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $this->location = array(
            'latitude' => 37.777456,
            'longitude'=> -122.393039
        );
    }

    public function testLookup()
    {
        $reverseGeocoded = $this->lob->usReverseGeocodeLookups()->lookup($this->location);

        $this->assertTrue(is_array($reverseGeocoded->addresses));
        $this->assertTrue(array_key_exists('id', $reverseGeocoded));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
        $this->lob->usReverseGeocodeLookups()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
        $this->lob->usReverseGeocodeLookups()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
        $this->lob->usReverseGeocodeLookups()->create($this->usZip);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
        $this->lob->usReverseGeocodeLookups()->delete('id');
    }

}