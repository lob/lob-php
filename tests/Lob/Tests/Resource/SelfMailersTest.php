<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class SelfMailersTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));

        $this->addressParams = array(
            'name' => 'Larry Lobster',
            'address_line1' => '210 King St',
            'address_city' => 'San Francisco',
            'address_state' => 'CA',
            'address_country' => 'US',
            'address_zip' => '94107',
            'email' => 'larry@lob.com'
        );

        // Default (6x18_bifold)
        $this->selfMailerParamsDefault = array(
            'description' => 'Test Self Mailer job',
            'to' => $this->addressParams,
            'from' => $this->addressParams,
            'outside' => '<h1>Test Self Mailer Outside</h1>',
            'inside' => 'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/self_mailers/6x18_sfm_inside.pdf',
        );

        $this->mergeVariableListSelfMailerParams = array(
            'description' => 'Test Self Mailer with merge variable list',
            'to' => $this->addressParams,
            'from' => $this->addressParams,
            'outside' => '<h1>Test Self Mailer Inside</h1>',
            'inside' => '<html>{{#list}} {{name}} {{/list}}</html>',
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

    public function testAll()
    {
        $selfMailers = $this->lob->selfMailers()->all();

        $this->assertTrue(is_array($selfMailers));
        $this->assertTrue(array_key_exists('data', $selfMailers));
        $this->assertTrue(is_array($selfMailers['data']));
    }

    public function testAllWithParams()
    {
        $query = array(
            'limit' => 2
        );
        $selfMailers = $this->lob->selfMailers()->all($query);

        $this->assertTrue(is_array($selfMailers));
        $this->assertTrue(array_key_exists('data', $selfMailers));
        $this->assertTrue(count($selfMailers['data']) === 2);
    }

    public function testAllWithMetadata()
    {
        $query = array(
            'metadata' => array(
                'campaign' => 'LOB-TEST'
            )
        );
        $selfMailers = $this->lob->selfMailers()->all($query);

        $this->assertTrue(is_array($selfMailers));
        $this->assertTrue(array_key_exists('data', $selfMailers));
        $this->assertTrue(count($selfMailers['data']) > 0);
    }

    public function testGet()
    {
        $id = $this->lob->selfMailers()->create($this->selfMailerParamsDefault)['id'];
        $selfMailer = $this->lob->selfMailers()->get($id);

        $this->assertTrue(is_array($selfMailer));
        $this->assertTrue($selfMailer['id'] === $id);
    }


    public function testCreateWithHtml()
    {
        $selfMailer = $this->lob->selfMailers()->create($this->selfMailerParamsDefault);

        $this->assertTrue(is_array($selfMailer));
        $this->assertTrue(array_key_exists('id', $selfMailer));
    }

    public function testCreateWithMergeVariableList()
    {
        $selfMailer = $this->lob->selfMailers()->create($this->mergeVariableListSelfMailerParams);

        $this->assertTrue(is_array($selfMailer));
        $this->assertTrue(array_key_exists('id', $selfMailer));
        $this->assertTrue($selfMailer['merge_variables']['list'][0]['name'] === 'Larissa');
        $this->assertTrue($selfMailer['merge_variables']['list'][1]['name'] === 'Larry');
    }

    public function testCreateWithFile()
    {
        $selfMailer = $this->lob->selfMailers()->create(array(
            'description' => 'Test Self Mailer with file',
            'to' => $this->addressParams,
            'from' => $this->addressParams,
            'outside' => '@'.realpath(__DIR__.'/../TestData/pdfs/sfm-6x18-outside.pdf'),
            'inside' => '@'.realpath(__DIR__.'/../TestData/pdfs/sfm-6x18-inside.pdf'),
            'size' => '6x18_bifold'
        ));

        $this->assertTrue(is_array($selfMailer));
        $this->assertTrue(array_key_exists('id', $selfMailer));
    }

    public function testCreate12x9WithFile()
    {
        $selfMailer = $this->lob->selfMailers()->create(array(
            'description' => 'Test Self Mailer with file - 12x9',
            'to' => $this->addressParams,
            'from' => $this->addressParams,
            'outside' => '@'.realpath(__DIR__.'/../TestData/pdfs/sfm-12x9-outside.pdf'),
            'inside' => '@'.realpath(__DIR__.'/../TestData/pdfs/sfm-12x9-inside.pdf'),
            'size' => '12x9_bifold'
        ));

        $this->assertTrue(is_array($selfMailer));
        $this->assertTrue(array_key_exists('id', $selfMailer));
    }

    public function testCreateIdempotent()
    {
        $testIdempotencyKey = uniqid();
        $selfMailerOne = $this->lob->selfMailers()->create($this->selfMailerParamsDefault, array(
            'Idempotency-Key' => $testIdempotencyKey
        ));

        $selfMailerTwo = $this->lob->selfMailers()->create($this->selfMailerParamsDefault, array(
            'Idempotency-Key' => $testIdempotencyKey
        ));

        $this->assertEquals($selfMailerOne['id'], $selfMailerTwo['id']);
    }

    public function testDelete()
    {
        $selfMailer = $this->lob->selfMailers()->create($this->selfMailerParamsDefault);
        $id = $selfMailer['id'];
        $deleted = $this->lob->selfMailers()->delete($id);

        $this->assertTrue(is_array($deleted));
        $this->assertTrue($deleted['id'] === $id);
        $this->assertTrue($deleted['deleted']);
    }
}
