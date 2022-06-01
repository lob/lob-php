<?php

use Lob\Lob;
use Lob\Exception\ValidationException;
use PHPUnit\Framework\TestCase;

class CardsTest extends TestCase
{
    protected function setUp(): void
    {
        $this->lob = new Lob(getenv('LOB_API_TEST_KEY'));
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
        $this->expectException(ValidationException::class);
        $card = $this->lob->cards()->create(array(
            'description' => 'Demo Card job',
            'size' => '4.25x6.25',
            'front' => 'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/pc_4x6_front.pdf', // TODO: Andrew will provide a valid resource to use
            'back' => '@'.realpath(__DIR__.'/../TestData/pdfs/card.pdf')
        ));

        $this->assertTrue(is_array($card));
        $this->assertTrue(array_key_exists('id', $card));
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

    public function testUpdate()
    {
        $updateParams = array(
            'description' => 'This is an updated description'
        );
        $id = $this->lob->cards()->create($this->cardParams)['id'];
        $updatedCard = $this->lob->cards()->update($id, $updateParams);

        $this->assertTrue(is_array($updatedCard));
        $this->assertTrue($updatedCard['description'] === 'This is an updated description');
    }

}
