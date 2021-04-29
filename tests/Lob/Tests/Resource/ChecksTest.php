<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class ChecksTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $bankAccount = $this->lob->bankAccounts()->create(
            array(
              'routing_number' => 322271627,
              'account_number' => 123456789,
              'account_type' => 'company',
              'signatory' => 'John Doe'
            )
        );
        $this->bankAccount = $this->lob->bankAccounts()->verify($bankAccount['id'], array(23,34));

        $this->checkParams = array(
            'description'           => 'Demo Check',
            'to[name]'              => 'Amrit Ayalur',
            'to[address_line1]'     => '123 Test Street',
            'to[address_city]'      => 'Mountain View',
            'to[address_state]'     => 'CA',
            'to[address_zip]'       => '94041',
            'to[address_country]'   => 'US',
            'from[name]'            => 'Bryan Adams',
            'from[address_line1]'   => '123 Hello Ave',
            'from[address_city]'    => 'Providence',
            'from[address_state]'   => 'RI',
            'from[address_zip]'     => '02912',
            'from[address_country]' => 'US',
            'bank_account'          => $this->bankAccount['id'],
            'amount'                => '2200',
            'memo'                  => 'rent'
        );
        $this->mergeVariableBooleanCheckParams = array(
            'description'           => 'Check with merge variable boolean',
            'to[name]'              => 'Kobe Bean',
            'to[address_line1]'     => '123 Test Street',
            'to[address_city]'      => 'Mountain View',
            'to[address_state]'     => 'CA',
            'to[address_zip]'       => '94041',
            'to[address_country]'   => 'US',
            'from[name]'            => 'Dwyane Wade',
            'from[address_line1]'   => '123 Hello Ave',
            'from[address_city]'    => 'Providence',
            'from[address_state]'   => 'RI',
            'from[address_zip]'     => '02912',
            'from[address_country]' => 'US',
            'bank_account'          => $this->bankAccount['id'],
            'amount'                => '2200',
            'memo'                  => 'rent',
            'attachment'            => '<html>{{#is_awesome}}You are awesome!{{/is_awesome}}</html>',
            'merge_variables'       => array('is_awesome' => TRUE)
        );
    }

    public function testCreate()
    {
        $check = $this->lob->checks()->create($this->checkParams);

        $this->assertTrue(is_array($check));
        $this->assertTrue(array_key_exists('id', $check));
    }

    public function testCreateWithMergeVariableBoolean()
    {
        $check = $this->lob->checks()->create($this->mergeVariableBooleanCheckParams);

        $this->assertTrue(is_array($check));
        $this->assertTrue(array_key_exists('id', $check));
        $this->assertTrue($check['merge_variables']['is_awesome']);
    }

    public function testGet()
    {
        $id = $this->lob->checks()->create($this->checkParams)['id'];
        $check = $this->lob->checks()->get($id);

        $this->assertTrue(is_array($check));
        $this->assertTrue($check['id'] === $id);
    }

    public function testDelete()
    {
        $id = $this->lob->checks()->create($this->checkParams)['id'];
        $deleted = $this->lob->checks()->delete($id);

        $this->assertTrue(is_array($deleted));
    }

    public function testAll()
    {
        $checks = $this->lob->checks()->all();

        $this->assertTrue(is_array($checks));
    }

}
