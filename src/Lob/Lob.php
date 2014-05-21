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

use InvalidArgumentException;
use BadMethodCallException;
use Lob\Resource;
use Lob\Resource\Addresses;
use Lob\Resource\BankAccounts;
use Lob\Resource\Checks;
use Lob\Resource\Countries;
use Lob\Resource\Jobs;
use Lob\Resource\Objects;
use Lob\Resource\Packagings;
use Lob\Resource\Postcards;
use Lob\Resource\Services;
use Lob\Resource\Settings;

class Lob
{
    private $version;
    private $apiKey;

    public function __construct($apiKey = null, $version = 'v1')
    {
        if (!is_null($apiKey)) {
            $this->setApiKey($apiKey);
        }
        $this->version = $version;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        if (!is_string($apiKey) || empty($apiKey)) {
            throw new InvalidArgumentException('API Key must be a non-empty string.');
        }
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    public function addresses()
    {
        return new Addresses($this);
    }

    public function bankAccounts()
    {
      return new BankAccounts($this);
    }

    public function checks()
    {
      return new Checks($this);
    }

    public function countries()
    {
        return new Countries($this);
    }

    public function jobs()
    {
        return new Jobs($this);
    }

    public function objects()
    {
        return new Objects($this);
    }

    public function packagings()
    {
        return new Packagings($this);
    }

    public function postcards()
    {
        return new Postcards($this);
    }

    public function services()
    {
        return new Services($this);
    }

    public function settings()
    {
        return new Settings($this);
    }
}
