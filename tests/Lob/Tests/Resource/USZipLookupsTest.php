<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


use Lob\Lob;
use PHPUnit\Framework\TestCase;

class USZipLookupsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(LOB_TEST_API_KEY);
        $this->usZip = array(
          'zip_code' => '94107'
        );
    }

    public function testLookup()
    {
      $zipLookup = $this->lob->usZipLookups()->lookup($this->usZip);

      $this->assertTrue(is_array($zipLookup));
      $this->assertTrue(array_key_exists('id', $zipLookup));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
      $this->lob->usZipLookups()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
      $this->lob->usZipLookups()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
      $this->lob->usZipLookups()->create($this->usZip);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
      $this->lob->usZipLookups()->delete('id');
    }

}
