<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lob;

interface ResourceInterface
{
    public function all(array $options = array(), $includeMeta = false);
    public function create(array $data);
    public function get($id);
    public function delete($id);
}
