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

class LettersTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'letters';
    protected $respondsToDelete = false;

    public function testCreate()
    {
        $letter = $this->resource->create(array(
            'to' => AddressesTest::$validCreateData,
            'from' => AddressesTest::$validCreateData,
            'description' => 'This an example message on back of the postcard',
            'file' => 'https://lob.com/goblue.pdf',
            'color' => FALSE
          ));

        $this->assertTrue(is_array($letter));
        $this->assertTrue(array_key_exists('id', $letter));
    }

    public function testColorCreate()
    {
        $letter = $this->resource->create(array(
            'to' => AddressesTest::$validCreateData,
            'from' => AddressesTest::$validCreateData,
            'description' => 'This an example message on back of the postcard',
            'file' => 'https://lob.com/goblue.pdf',
            'color' => TRUE
          ));

        $this->assertTrue(is_array($letter));
        $this->assertTrue(array_key_exists('id', $letter));
    }

    public function testDelete()
    {
      $letter = $this->resource->create(array(
          'to' => AddressesTest::$validCreateData,
          'from' => AddressesTest::$validCreateData,
          'description' => 'This an example message on back of the postcard',
          'file' => 'https://lob.com/goblue.pdf',
          'color' => FALSE
        ));
      $id = $letter['id'];
      $deleted = $this->resource->delete($id);

      $this->assertTrue(is_array($deleted));
    }

}
