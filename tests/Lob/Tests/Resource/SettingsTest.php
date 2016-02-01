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

class SettingsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'settings';
    protected $respondsToCreate = false;
    protected $respondsToDelete = false;
    protected $respondsToAllWithCountOffset = false;


    /**
    * @expectedException BadMethodCallException
    */
    public function testCreateFail()
    {
        $country = array(
          'name' => 'LobCity',
          'short_name' => 'LC',
        );
        $this->resource->create($country);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDeleteFail()
    {
        $this->resource->delete('1');
    }

    protected function getTestSampleAll()
    {
        if ($this->testSampleAll) {
            return $this->testSampleAll;
        }

        $this->testSampleAll = $this->resource->all(array(
            'limit' => 1
        ));

        return $this->testSampleAll;
    }

}
