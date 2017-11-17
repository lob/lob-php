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

class LettersTest extends TestCase
{
    protected function setUp()
    {
        $addressParams = array(
            'name' => 'Larry Lobster',
            'address_line1' => '185 Berry St',
            'address_line2' => 'Ste 6100',
            'address_city' => 'San Francisco',
            'address_state' => 'CA',
            'address_country' => 'US',
            'address_zip' => '94107',
            'email' => 'larry@lob.com'
        );

        $this->lob = new Lob(LOB_TEST_API_KEY);
        $this->bwLetterParams = array(
            'to' => $addressParams,
            'from' => $addressParams,
            'description' => 'This an example message on back of the postcard',
            'file' => 'https://lob.com/goblue.pdf',
            'color' => FALSE
        );
        $this->colorLetterParams = array(
            'to' => $addressParams,
            'from' => $addressParams,
            'description' => 'This an example message on back of the postcard',
            'file' => 'https://lob.com/goblue.pdf',
            'color' => TRUE
        );
    }

    public function testCreate()
    {
        $letter = $this->lob->letters()->create($this->bwLetterParams);

        $this->assertTrue(is_array($letter));
        $this->assertTrue(array_key_exists('id', $letter));
    }

    public function testColorCreate()
    {
        $letter = $this->lob->letters()->create($this->colorLetterParams);

        $this->assertTrue(is_array($letter));
        $this->assertTrue(array_key_exists('id', $letter));
    }

    public function testGet()
    {
        $id = $this->lob->letters()->create($this->colorLetterParams)['id'];
        $letter = $this->lob->letters()->get($id);

        $this->assertTrue(is_array($letter));
        $this->assertTrue($letter['id'] === $id);
    }

    public function testDelete()
    {
        $id = $this->lob->letters()->create($this->bwLetterParams)['id'];
        $deleted = $this->lob->letters()->delete($id);

        $this->assertTrue(is_array($deleted));
    }

    public function testAll()
    {
        $areas = $this->lob->areas()->all();
        $this->assertTrue(is_array($areas));
    }

}
