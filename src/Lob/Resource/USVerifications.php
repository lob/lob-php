<?php

namespace Lob\Resource;

use Lob\ResourceBase;
use BadMethodCallException;

class USVerifications extends ResourceBase
{
    public function verify(array $data, array $query = array())
    {
        return $this->sendRequest(
            'POST',
            'us_verifications',
            $query,
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
