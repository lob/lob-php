<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lob\Tests\Resource;

class AddressesTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'addresses';
    public static $validCreateData = array(
        'name' => 'Harry Zhang',
        'address_line1' => '1037 El Monte Ave',
        'address_line2' => 'C',
        'address_city' => 'Mountain View',
        'address_state' => 'CA',
        'address_country' => 'US',
        'address_zip' => '94040',
        'email' => 'harry@lob.com',
        'phone' => '6502548929',
    );
    public static $invalidCreateData = array();

    public function testCreateWithSuccess()
    {
        $address = $this->resource->create(static::$validCreateData);

        $this->assertTrue(is_array($address));
        $this->assertTrue(array_key_exists('id', $address));
    }
}