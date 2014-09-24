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

class Addresses extends ResourceBase
{
    public function verify(array $data)
    {
        return $this->sendRequest(
            'POST',
            $this->lob->getVersion(),
            $this->lob->getClientVersion(),
            'verify',
            array(),
            $data
        );
    }
}
