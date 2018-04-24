<?php

class Template 
{
    /**
     * Render a php file and return the output
     * @param string $template
     * @param array $variables
     * @return string
     */
    public static function render($template, $variables = [])
    {
        $file = dirname(__DIR__) .  '/templates/' . $template . '.php';
        if(!is_file($file)) {
            throw new Exception("Template not found");
        }

        extract($variables);
        ob_start();
        include $file;
        return ob_get_clean();
    }
}