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

class USVerificationsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(LOB_TEST_API_KEY);
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
