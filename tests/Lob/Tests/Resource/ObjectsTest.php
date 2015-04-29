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

class ObjectsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'objects';

    public function testCreateWithLocalFileUpload()
    {
        $object = $this->resource->create(array(
            'description' => 'GO BLUE',
            'file' => '@'.realpath(__DIR__.'/../TestData/pdfs/postcardfront.pdf'),
            'setting' => 200,
            'quantity' => 1,
        ));

        $this->assertTrue(is_array($object));
        $this->assertTrue(array_key_exists('id', $object));
    }

    public function testCreateWithRemoteFileUrl()
    {
        $object = $this->resource->create(array(
            'description' => 'GO BLUE',
            'file' => 'https://lob.com/postcardfront.pdf',
            'setting' => 200,
            'quantity' => 1,
        ));

        $this->assertTrue(is_array($object));
        $this->assertTrue(array_key_exists('id', $object));
    }
}
