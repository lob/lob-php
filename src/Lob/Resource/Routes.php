<?php

namespace Lob\Resource;

use Lob\ResourceBase;
use BadMethodCallException;

class Routes extends ResourceBase
{
    public function create(array $data)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function delete($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }
}
