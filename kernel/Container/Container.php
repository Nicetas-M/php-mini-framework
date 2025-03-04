<?php

namespace App\Kernel\Container;

use App\Kernel\Http\Request;
use App\Kernel\Router\Router;
use App\Kernel\View\View;

class Container {
    public readonly Router $router;
    public readonly Request $request;
    public readonly View $view;

    public function __construct() {
        $this->registerServices();
    }

    private function registerServices() {
        $this->request = Request::createFromGlobals();
        $this->view = new View();
        $this->router = new Router($this->view);
    }
}