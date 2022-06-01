<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class CardOrdersTest extends TestCase
{
    protected function setUp(): void
    {
        $this->lob = new Lob(getenv('LOB_API_TEST_KEY'));
        $this->cardOrdersParams = array(
            'quantity' => 10000
        );
        $this->cardParams = array(
            'front' => '@'.realpath(__DIR__.'/../TestData/pdfs/card.pdf'),
            'back' => '@'.realpath(__DIR__.'/../TestData/pdfs/card.pdf'),
            'description' => 'Card with a PDF file',
            'size' => '2.125x3.375'
        );
        $this->card = $this->lob->cards()->create($this->cardParams);
    }

    public function testCreate()
    {
        $card_id = $this->card['id'];
        $cardOrder = $this->lob->cardOrders($card_id)->create($this->cardOrdersParams);

        $this->assertTrue(is_array($cardOrder));
        $this->assertTrue(array_key_exists('id', $cardOrder));
    }

    public function testAll()
    {
        $card_id = $this->card['id'];
        $cardOrders = $this->lob->cardOrders($card_id)->all();

        $this->assertTrue(is_array($cardOrders));
    }

}
