<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;

class TemplatesTest extends TestCase
{
    protected function setUp(): void
    {
        $this->templateParams = array(
            'description' => 'Test Template',
            'html' => '<html>HTML for {{name}}</html>'
        );

        $this->lob = new Lob(getenv('LOB_API_TEST_KEY'));
    }

    public function testCreate()
    {
        $template = $this->lob->templates()->create($this->templateParams);

        $this->assertTrue(is_array($template));
        $this->assertTrue(array_key_exists('id', $template));
    }

    public function testGet()
    {
        $id = $this->lob->templates()->create($this->templateParams)['id'];
        $template = $this->lob->templates()->get($id);

        $this->assertTrue(is_array($template));
        $this->assertTrue($template['id'] === $id);
    }

    public function testDelete()
    {
        $id = $this->lob->templates()->create($this->templateParams)['id'];
        $deleted = $this->lob->templates()->delete($id);

        $this->assertTrue(is_array($deleted));
    }

}
