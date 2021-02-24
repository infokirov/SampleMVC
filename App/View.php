<?php

namespace App;

use Magic;

class View 
{
    public function display($template):void
    {
        echo $this->render($template);
    }

    public function render($template):string
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}