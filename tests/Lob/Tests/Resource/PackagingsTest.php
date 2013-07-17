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
    protected $respondsToRetrieveListWithCountOffset = false;
    protected $respondsToRetrieve = false;
    protected $respondsToCreate = false;
    protected $respondsToDelete = false;
}