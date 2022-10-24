<?php

namespace App\Controller;

use App\Controller\Controller as Controller;

class HomeController extends Controller {

    public function show() {
        $array_bdd_template = [
            'title' => 'Voici mon titre',
            'content' => "C'est mon contenu"
        ];

        $this->render(array('array_bdd_template' => $array_bdd_template), 'home');
        
    }
}