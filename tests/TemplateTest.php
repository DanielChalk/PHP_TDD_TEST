<?php

class TemplateTest extends PHPUnit_Framework_TestCase
{
    public function testTemplateUsesVariable()
    {
        $template_file  = 'say_hello';
        $variables      = ['username' => 'world'];
        $view           = Template::render($template_file, $variables);
        $this->assertContains('Hello world!', $view);
    }

    /**
     * @expectedException   Exception
     * @expectedExceptionMessage Template not found
     */
    public function testTemplateThrowsWhenNoFileExists()
    {
        $template = 'does_not_exists';
        Template::render($template, []);
    }
}
