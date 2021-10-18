<?php

namespace Lob\Resource;

use Lob\ResourceBase;

class Cards extends ResourceBase
{
  public function update($id, array $data, array $headers = null)
    {
        return $this->sendRequest(
            'POST',
            'cards/'.strval($id),
            array(),
            $data,
            $headers
        );
    }
}
