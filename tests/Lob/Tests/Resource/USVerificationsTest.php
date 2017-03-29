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

class USVerificationsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'usVerifications';
    protected $respondsToAll = false;
    protected $respondsToAllWithCountOffset = false;
    protected $respondsToGet = false;
    protected $respondsToCreate = false;
    protected $respondsToDelete = false;

    public function testVerify()
    {
      $usAddress = array(
        'recipient' => 'LOB.COM',
        'primary_line' => '185 BERRY ST STE 6600',
        'city' => 'SAN FRANCISCO',
        'state' => 'CA',
        'zip_code' => '94107'
      );

      $verifiedAddress = $this->resource->verify($usAddress);

      $this->assertTrue(is_array($verifiedAddress));
      $this->assertTrue(array_key_exists('id', $verifiedAddress));
    }
}
