<?php

namespace Lob\Resource;

use Lob\ResourceBase;
use BadMethodCallException;

class USZipLookups extends ResourceBase
{
    public function lookup(array $data)
    {
        return $this->sendRequest(
            'POST',
            'us_zip_lookups',
            array(),
            $data
        );
    }

    public function all(array $options = array(), $includeMeta = false)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function create(array $data, array $headers = null)
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
