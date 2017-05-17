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

use Lob\Exception\AuthorizationException;

class IntlVerificationsTest extends \Lob\Tests\ResourceTest
{
    protected $resourceMethodName = 'intlVerifications';
    protected $respondsToAll = false;
    protected $respondsToAllWithCountOffset = false;
    protected $respondsToGet = false;
    protected $respondsToCreate = false;
    protected $respondsToDelete = false;

    public function testVerify()
    {
      $intlAddress = array(
        'address_line1' => '123 Test St',
        'address_city' => 'HEARST',
        'address_state' => 'ONTARIO',
        'address_zip' => 'P01LN0',
        'address_country' => 'CA'
      );

      $this->setExpectedException('Lob\Exception\AuthorizationException');
      $this->resource->verify($intlAddress);
    }
}
