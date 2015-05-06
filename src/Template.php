<?php
/**
 * Created by PhpStorm.
 * User: Daniel Chalk <daniel@containsflashingimages.com>
 * Date: 06/05/2015
 * Time: 11:06
 */

class Template
{
    /**
     * path to a template
     * @var string
     */
    protected $template;

    /**
     * array of keys and values to be used within the template
     * @var mixed[]
     */
    protected $variables;

    /**
     * @param $template
     * @param $variables
     */
    public function __construct($template, $variables)
    {
        $this->template = $template;
        $this->variables = $variables;
    }

    /**
     * @param $template
     * @param $variables
     * @return string
     */
    public static function make($template, $variables)
    {
        $template = new self($template, $variables);
        return $template->render();
    }

    public function render()
    {
        throw new Exception('not implemented!');
    }
}