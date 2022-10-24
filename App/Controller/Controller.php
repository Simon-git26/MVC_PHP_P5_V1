<?php

namespace App\Controller;

abstract class Controller {

    // Ma fonction render pour aller chercher les infos de mes données et les transmettre au template (view) voulu
    protected function render($variables, $template) {
        ob_start();
        extract($variables);
        ob_get_clean();
        require_once ROOT.'/App/Views/'.$template.'.php';
    }
}

?>