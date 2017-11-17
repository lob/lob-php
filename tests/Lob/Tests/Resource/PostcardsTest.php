<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class PostcardsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(LOB_TEST_API_KEY);
        $this->addressParams = array(
            'name' => 'Larry Lobster',
            'address_line1' => '185 Berry St',
            'address_line2' => 'Ste 6100',
            'address_city' => 'San Francisco',
            'address_state' => 'CA',
            'address_country' => 'US',
            'address_zip' => '94107',
            'email' => 'larry@lob.com'
        );
        $this->postcardParams = array(
            'description' => 'Demo Postcard job',
            'to' => $this->addressParams,
            'from' => $this->addressParams,
            'back' => '<h1>This an example back of the postcard</h1>',
            'front' => 'https://lob.com/postcardfront.pdf'
        );
    }

    public function testCreate()
    {
        $postcard = $this->lob->postcards()->create($this->postcardParams);

        $this->assertTrue(is_array($postcard));
        $this->assertTrue(array_key_exists('id', $postcard));
    }

    public function testCreateIdempotent()
    {
        $testIdempotencyKey = uniqid();
        $postcardOne = $this->lob->postcards()->create($this->postcardParams, array(
            'Idempotency-Key' => $testIdempotencyKey
        ));

        $postcardTwo = $this->lob->postcards()->create($this->postcardParams, array(
            'Idempotency-Key' => $testIdempotencyKey
        ));

        $this->assertEquals($postcardOne['id'], $postcardTwo['id']);
    }

    public function testCreateWithBackFile()
    {
        $postcard = $this->lob->postcards()->create(array(
            'description' => 'Demo Postcard job', // Required
            'to' => $this->addressParams,
            'from' => $this->addressParams,
            'front' => 'https://lob.com/postcardfront.pdf',
            'back' => '@'.realpath(__DIR__.'/../TestData/pdfs/postcardfront.pdf')
        ));

        $this->assertTrue(is_array($postcard));
        $this->assertTrue(array_key_exists('id', $postcard));
    }

    public function testDelete()
    {
        $postcard = $this->lob->postcards()->create($this->postcardParams);
        $id = $postcard['id'];
        $deleted = $this->lob->postcards()->delete($id);

        $this->assertTrue(is_array($deleted));
    }

    public function testGet()
    {
        $id = $this->lob->postcards()->create($this->postcardParams)['id'];
        $postcard = $this->lob->postcards()->get($id);

        $this->assertTrue(is_array($postcard));
        $this->assertTrue($postcard['id'] === $id);
    }

    public function testAll()
    {
        $postcards = $this->lob->postcards()->all();
        $this->assertTrue(is_array($postcards));
    }

}
