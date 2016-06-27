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

class PostcardsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'postcards';
    protected $respondsToDelete = false;

    public function testCreateWithMessage()
    {
        $postcard = $this->resource->create(array(
            'description' => 'Demo Postcard job', // Required
            'to' => AddressesTest::$validCreateData,
            'from' => AddressesTest::$validCreateData,
            'message' => 'This an example message on back of the postcard',
            'front' => 'https://lob.com/postcardfront.pdf'
        ));

        $this->assertTrue(is_array($postcard));
        $this->assertTrue(array_key_exists('id', $postcard));
    }

    public function testCreateWithBackFile()
    {
        $postcard = $this->resource->create(array(
            'description' => 'Demo Postcard job', // Required
            'to' => AddressesTest::$validCreateData,
            'from' => AddressesTest::$validCreateData,
            'front' => 'https://lob.com/postcardfront.pdf',
            'back' => '@'.realpath(__DIR__.'/../TestData/pdfs/postcardfront.pdf')
        ));

        $this->assertTrue(is_array($postcard));
        $this->assertTrue(array_key_exists('id', $postcard));
    }

    public function testDelete()
    {
      $postcard = $this->resource->create(array(
          'description' => 'Demo Postcard job', // Required
          'to' => AddressesTest::$validCreateData,
          'from' => AddressesTest::$validCreateData,
          'message' => 'This an example message on back of the postcard',
          'front' => 'https://lob.com/postcardfront.pdf'
      ));
      $id = $postcard['id'];
      $deleted = $this->resource->delete($id);

      $this->assertTrue(is_array($deleted));
    }

}
