<?php

namespace Lob\Resource;

use Lob\ResourceBase;
use BadMethodCallException;

class Areas extends ResourceBase
{
    public function delete($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }
}
