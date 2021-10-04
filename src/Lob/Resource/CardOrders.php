<?php

namespace Lob\Resource;

use Lob\ResourceBase;

class CardOrders extends ResourceBase
{
    private $cards = 'cards';
    private $card_orders = 'orders';

    public function __construct($lob, $card_id)
    {
        parent::__construct($lob);
        $this->card_id = $card_id;
    }

    public function all(array $query = array())
    {
        return $this->sendRequest(
            'GET',
            $this->cards.'/'.strval($this->card_id).'/'.$this->card_orders,
            $query
        );
    }

    public function create(array $data, array $headers = null)
    {
        return $this->sendRequest(
            'POST',
            $this->cards.'/'.strval($this->card_id).'/'.$this->card_orders,
            array(),
            $data,
            $headers
        );
    }

    public function get($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }

    public function delete($id)
    {
        throw new BadMethodCallException(__CLASS__.'::'.__FUNCTION__.'() is not supported.');
    }
}
