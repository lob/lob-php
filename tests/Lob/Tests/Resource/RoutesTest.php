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

class RoutesTest extends TestCase
{
    protected function setUp()
    {
        $this->lob = new Lob(LOB_TEST_API_KEY);
    }

    public function testAll()
    {
        $routes = $this->lob->routes()->all(array(
            'zip_codes' => '48168',
            'zip_codes' => '94158',
        ));

        $this->assertTrue(is_array($routes));
    }

    public function testGet()
    {
        $route = $this->lob->routes()->get('94158-C002');

        $this->assertTrue(is_array($route));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreateFail()
    {
        $create = $this->lob->routes()->create(array());
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDeleteFail()
    {
        $create = $this->lob->routes()->delete('1');
    }

}
