<?php

namespace Lob\Resource;

use BadMethodCallException;
use Lob\Resource as ResourceBase;

class Areas extends ResourceBase
{
    public function delete($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }
}
