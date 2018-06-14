<?php

namespace Lob;

interface ResourceInterface
{
    public function all(array $options = array());
    public function create(array $data, array $headers = null);
    public function get($id);
    public function delete($id);
}
