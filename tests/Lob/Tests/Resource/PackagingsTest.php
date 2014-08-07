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

class PackagingsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'packagings';
    protected $respondsToAllWithCountOffset = false;
    protected $respondsToGet = false;
    protected $respondsToCreate = false;
    protected $respondsToDelete = false;

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreateFail()
    {
        $packaging = array(
          'name' => 'LobPack',
          'description' => 'Lob Packaging',
        );
        $this->resource->create($packaging);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDeleteFail()
    {
        $this->resource->delete('1');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGetFail()
    {
        $this->resource->get('1');
    }
}
