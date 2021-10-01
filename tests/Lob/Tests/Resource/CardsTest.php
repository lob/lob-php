<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class CardsTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $this->cardParams = array(
          'front' => '@'.realpath(__DIR__.'/../TestData/pdfs/card.pdf'),
          'back' => '@'.realpath(__DIR__.'/../TestData/pdfs/card.pdf'),
          'description' => 'Card with a PDF file',
          'size' => '2.125x3.375'
        );
    }

    public function testCreate()
    {
        $card = $this->lob->cards()->create($this->cardParams);

        $this->assertTrue(is_array($card));
        $this->assertTrue(array_key_exists('id', $card));
    }

    public function testCreateWithLink()
    {
        $card = $this->lob->cards()->create(array(
            'description' => 'Demo Card job',
            'size' => '2.125x3.375',
            'front' => 'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/pc_4x6_front.pdf', // TODO: Andrew will provide a valid resource to use
            'back' => '@'.realpath(__DIR__.'/../TestData/pdfs/card.pdf')
        ));

        $this->assertTrue(is_array($postcard));
        $this->assertTrue(array_key_exists('id', $postcard));
    }

    public function testDelete()
    {
        $card = $this->lob->cards()->create($this->cardParams);
        $id = $card['id'];
        $deleted = $this->lob->cards()->delete($id);

        $this->assertTrue(is_array($deleted));
    }

    public function testGet()
    {
        $id = $this->lob->cards()->create($this->cardParams)['id'];
        $card = $this->lob->cards()->get($id);

        $this->assertTrue(is_array($card));
        $this->assertTrue($card['id'] === $id);
    }

    public function testAll()
    {
        $cards = $this->lob->cards()->all();
        $this->assertTrue(is_array($cards));
    }

}
