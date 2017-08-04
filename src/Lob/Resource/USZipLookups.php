<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lob\Resource;

use Lob\Resource as ResourceBase;
use BadMethodCallException;

class USZipLookups extends ResourceBase
{
    public function lookup(array $data)
    {
        return $this->sendRequest(
            'POST',
            $this->lob->getVersion(),
            $this->lob->getClientVersion(),
            'us_zip_lookups',
            array(),
            $data
        );
    }

    public function all(array $options = array(), $includeMeta = false)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function create(array $data)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function get($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function delete($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }
}
