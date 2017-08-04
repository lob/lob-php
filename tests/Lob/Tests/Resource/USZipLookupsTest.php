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

class USZipLookupsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'usZipLookups';
    protected $respondsToAll = false;
    protected $respondsToAllWithCountOffset = false;
    protected $respondsToGet = false;
    protected $respondsToCreate = false;
    protected $respondsToDelete = false;

    public function testLookup()
    {
      $usZip = array(
        'zip_code' => '94107'
      );

      $zipLookup = $this->resource->lookup($usZip);

      $this->assertTrue(is_array($zipLookup));
      $this->assertTrue(array_key_exists('id', $zipLookup));
    }
}
