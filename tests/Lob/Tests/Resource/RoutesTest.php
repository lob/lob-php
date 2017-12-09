<?php

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
