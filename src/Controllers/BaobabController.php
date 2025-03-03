<?php

namespace App\Controllers;

use App\Kernel\View\View;

class BaobabController {
    public function index() {
        $view = new View();
        $view->page('baobab');
    }
}