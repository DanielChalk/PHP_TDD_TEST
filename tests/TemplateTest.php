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
        $template ='user';
        $variables = ['username' => 'Demo user'];
        $view = Template::make($template, $variables);
        $this->assertContains('Demo user', $view, 'Demo user found');
    }

    /**
     * @expectedException   Exception
     * @expectedExceptionMessage Template not found
     */
    public function testTemplateThrowsWhenNoFileExists()
    {
        $template = dirname(__DIR__) . '/templates/user.php';
        Template::make($template, []);
    }
}