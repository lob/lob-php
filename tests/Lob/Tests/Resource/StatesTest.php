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

class States extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'states';
    protected $respondsToCreate = false;
    protected $respondsToDelete = false;
    protected $respondsToAllWithCountOffset = false;

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreateFail()
    {
        $state = array(
          'name' => 'LobCity',
          'short_name' => 'LC',
        );
        $this->resource->create($state);
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

