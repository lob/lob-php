<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class USAutocompletionsTest extends TestCase
{
    protected function setUp(): void
    {
        $this->lob = new Lob(getenv('LOB_API_TEST_KEY'));
        $this->payload = array(
            'address_prefix' => '185 BER',
            'city' => 'SAN FRANCISCO',
            'state' => 'CA',
        );
    }

    public function testVerify()
    {
        $autocompletions = $this->lob->usAutocompletions()->autocomplete($this->payload);
        $this->assertTrue(is_array($autocompletions));
        $this->assertTrue(array_key_exists('id', $autocompletions));
        $this->assertTrue(array_key_exists('suggestions', $autocompletions));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usAutocompletions()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usAutocompletions()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usAutocompletions()->create($this->payload);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usAutocompletions()->delete('id');
    }
}
