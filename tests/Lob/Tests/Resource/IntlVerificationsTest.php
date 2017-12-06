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

class IntlVerificationsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(LOB_TEST_API_KEY);
        $this->intlAddress = array(
            'primary_line' => '123 Test St',
            'city' => 'HEARST',
            'state' => 'ONTARIO',
            'postal_code' => 'P01LN0',
            'country' => 'CA'
        );
    }

    /**
     * @expectedException Lob\Exception\AuthorizationException
     */
    public function testVerify()
    {
        $this->lob->intlVerifications()->verify($this->intlAddress);
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
