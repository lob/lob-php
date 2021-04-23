<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class PostcardsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
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
            'front' => 'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/pc_4x6_front.pdf'
        );
        $this->mergeVariableListPostcardParams = array(
            'description' => 'Postcard with merge variable list',
            'to' => $this->addressParams,
            'from' => $this->addressParams,
            'front' => '<html>{{#list}} {{name}} {{/list}}</html>',
            'back' => '<h1>This an example back of the postcard</h1>',
            'merge_variables' => array(
                'list' => array(
                    array(
                        'name' => 'Larissa'
                    ),
                    array(
                        'name' => 'Larry'
                    )
                )
            )
        );
    }

    public function testCreate()
    {
        $postcard = $this->lob->postcards()->create($this->postcardParams);

        $this->assertTrue(is_array($postcard));
        $this->assertTrue(array_key_exists('id', $postcard));
    }

    public function testCreateWithMergeVariableList()
    {
        $postcard = $this->lob->postcards()->create($this->mergeVariableListPostcardParams);

        $this->assertTrue(is_array($postcard));
        $this->assertTrue(array_key_exists('id', $postcard));
        $this->assertTrue($postcard['merge_variables']['list'][0]['name'] === 'Larissa');
        $this->assertTrue($postcard['merge_variables']['list'][1]['name'] === 'Larry');
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
            'front' => 'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/pc_4x6_front.pdf',
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
