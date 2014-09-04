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

class RoutesTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'routes';
    protected $respondsToDelete = false;
    protected $respondsToCreate = false;
    protected $respondsToGet = false;
    protected $respondsToAll = false;
    protected $respondsToAllWithCountOffset = false;

    public function testAll()
    {
        $routes = $this->resource->all(array(
            'zip_codes' => '48168',
            'zip_codes' => '94158',
        ));

        $this->assertTrue(is_array($routes));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreateFail()
    {
      $create = $this->resource->create(array());
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGetFail()
    {
        $create = $this->resource->get('1');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDeleteFail()
    {
        $create = $this->resource->delete('1');
    }

}
