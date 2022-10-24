<?php

namespace App\Controller;

use App\Controller\Controller as Controller;

class HomeController extends Controller {

    public function showVarBdd() {
        $content = "C'est mon contenu";

        $array_bdd_template = [
            'title' => 'Voici mon titre',
            'content' => $content,
            'categories' => []
        ];

        $this->render($array_bdd_template, 'home');
    }
}