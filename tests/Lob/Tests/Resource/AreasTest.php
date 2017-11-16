<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class AreasTest extends TestCase
{
  protected function setUp()
  {
      $this->lob = new Lob(LOB_TEST_API_KEY);
      $this->areaParams = array(
        'description' => 'Demo Area',
        'front' => 'https://s3-us-west-2.amazonaws.com/lob-assets/areafront.pdf',
        'back' => 'https://s3-us-west-2.amazonaws.com/lob-assets/areaback.pdf',
        'routes' => '94158-C001',
        'target_type' => 'all',
      );
  }

  public function testCreate()
  {
     $area = $this->lob->areas()->create($this->areaParams);

     $this->assertTrue(is_array($area));
     $this->assertTrue(array_key_exists('id', $area));
  }

  public function testGet()
  {
     $id = $this->lob->areas()->create($this->areaParams)['id'];
     $area = $this->lob->areas()->get($id);

     $this->assertTrue(is_array($area));
     $this->assertTrue($area['id'] === $id);
  }

  public function testAll()
  {
    $areas = $this->lob->areas()->all();
    $this->assertTrue(is_array($areas));
  }

  /**
  * @expectedException BadMethodCallException
  */
  public function testDeleteFail()
  {
    $this->lob->areas()->delete('1');
  }

}
