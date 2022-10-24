<?php

namespace App\Controller;

abstract class Controller {
    protected function render($variables, $template) {
        ob_start();
        extract($variables);
        ob_get_clean();
        require_once ROOT.'/App/Views/'.$template.'.php';
    }
}