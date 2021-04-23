<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class BankAccountsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $this->bankData = array(
            'routing_number' => 322271627,
            'account_number' => 123456789,
            'account_type' => 'company',
            'signatory' => 'John Doe'
        );
    }

    public function testCreate()
    {
        $bankAccount = $this->lob->bankAccounts()->create($this->bankData);

        $this->assertTrue(is_array($bankAccount));
        $this->assertTrue(array_key_exists('id', $bankAccount));
    }

    public function testDelete()
    {

        $id = $this->lob->bankAccounts()->create($this->bankData)['id'];
        $deleted = $this->lob->bankAccounts()->delete($id);

        $this->assertTrue(is_array($deleted));
    }

    public function testGet()
    {
        $id = $this->lob->bankAccounts()->create($this->bankData)['id'];
        $bankAccount = $this->lob->bankAccounts()->get($id);

        $this->assertTrue(is_array($bankAccount));
        $this->assertTrue($bankAccount['id'] === $id);
    }

    public function testAll()
    {
        $bankAccounts = $this->lob->bankAccounts()->all();

        $this->assertTrue(is_array($bankAccounts));
    }

    public function testVerify()
    {
        $id = $this->lob->bankAccounts()->create($this->bankData)['id'];
        $bankAccount = $this->lob->bankAccounts()->get($id);

        $this->assertTrue(is_array($bankAccount));
        $this->assertTrue(array_key_exists('id', $bankAccount));
        $this->assertTrue($bankAccount['verified'] == 0);

        $verifiedAccount = $this->lob->bankAccounts()->verify($bankAccount['id'], array(23,34));
        $this->assertTrue(is_array($verifiedAccount));
        $this->assertTrue($verifiedAccount['verified'] == 1);
    }

}
