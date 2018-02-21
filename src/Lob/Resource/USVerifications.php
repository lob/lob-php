<?php

namespace Lob\Resource;

use Lob\Resource as ResourceBase;
use BadMethodCallException;

class USVerifications extends ResourceBase
{
    public function verify(array $data)
    {
        return $this->sendRequest(
            'POST',
            'us_verifications',
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
