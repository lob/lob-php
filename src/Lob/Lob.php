<?php

namespace Lob;

use InvalidArgumentException;
use BadMethodCallException;
use Lob\ResourceBase;
use Lob\Resource\Addresses;
use Lob\Resource\Areas;
use Lob\Resource\BankAccounts;
use Lob\Resource\Checks;
use Lob\Resource\IntlVerifications;
use Lob\Resource\Letters;
use Lob\Resource\Postcards;
use Lob\Resource\Routes;
use Lob\Resource\USAutocompletions;
use Lob\Resource\USVerifications;
use Lob\Resource\USZipLookups;

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
        $this->clientVersion = '2.2.0';
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

    public function intlVerifications()
    {
        return new IntlVerifications($this);
    }

    public function letters()
    {
        return new Letters($this);
    }

    public function postcards()
    {
        return new Postcards($this);
    }

    public function routes()
    {
        return new Routes($this);
    }

    public function usAutocompletions()
    {
        return new USAutocompletions($this);
    }

    public function usVerifications()
    {
      return new USVerifications($this);
    }

    public function usZipLookups()
    {
      return new USZipLookups($this);
    }
}
