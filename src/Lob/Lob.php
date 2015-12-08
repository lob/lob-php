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
use Lob\Resource\Areas;
use Lob\Resource\BankAccounts;
use Lob\Resource\Checks;
use Lob\Resource\Countries;
use Lob\Resource\Jobs;
use Lob\Resource\Letters;
use Lob\Resource\Objects;
use Lob\Resource\Postcards;
use Lob\Resource\Routes;
use Lob\Resource\Settings;
use Lob\Resource\States;

class Lob
{
    private $version;
    private $apiKey;
    private $clientVersion;

    public function __construct($apiKey = null, $version = null)
    {
        if (!is_null($apiKey)) {
            $this->setApiKey($apiKey);
        }
        $this->version = $version;
        $this->clientVersion = '1.5.0';
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

    public function getClientVersion()
    {
      return $this->clientVersion;
    }

    public function addresses()
    {
        return new Addresses($this);
    }

    public function areas()
    {
        return new Areas($this);
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

    public function letters()
    {
        return new Letters($this);
    }

    public function objects()
    {
        return new Objects($this);
    }

    public function postcards()
    {
        return new Postcards($this);
    }

    public function routes()
    {
        return new Routes($this);
    }

    public function settings()
    {
        return new Settings($this);
    }

    public function states()
    {
        return new States($this);
    }
}
