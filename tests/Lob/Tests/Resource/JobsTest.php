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

use Lob\Tests\Resource\AddressesTest;

class JobsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'jobs';
    protected $respondsToDelete = false;

    public function testCreateWithMessage()
    {
        $job = $this->resource->create(array(
            'name' => 'Welcome letter to JJJ INC',
            'to' => AddressesTest::$validCreateData,
            'from' => AddressesTest::$validCreateData,
            'object1' => array(
                'name' => 'GO BLUE',
                'file' => 'https://www.lob.com/test.pdf',
                'setting_id' => 200,
                'quantity' => 1,
            ),
        ));

        $this->assertTrue(is_array($job));
        $this->assertTrue(array_key_exists('id', $job));
    }
}
