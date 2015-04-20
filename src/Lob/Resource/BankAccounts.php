<?php

namespace Lob\Resource;

use Lob\Resource as ResourceBase;

class BankAccounts extends ResourceBase
{
  function resourceName() {
    return 'bank_accounts';
  }

  function verify($id, $amounts) {
    return $this->sendRequest(
        'POST',
        $this->lob->getVersion(),
        $this->lob->getClientVersion(),
        $this->resourceName().'/'.strval($id).'/verify',
        array(),
        array(
          'amounts' => $amounts
        )
    );
  }
}
