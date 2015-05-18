<?php

/**
 * Created by PhpStorm.
 * User: daniel.chalk
 * Date: 06/05/2015
 * Time: 10:55
 */
class TemplateTest extends PHPUnit_Framework_TestCase
{
    public function testTemplateIncludesUsername()
    {
        $template  = 'user';
        $variables = ['username' => 'Demo user'];
        $view      = Template::render($template, $variables);
        $this->assertContains('Demo user', $view);
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