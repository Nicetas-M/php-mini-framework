<?php

namespace App\Kernel\View;

use App\Kernel\Exceptions\NotFoundException;
use App\Kernel\Session\SessionInterface;

class View implements ViewInterface{
    public function __construct(
        private SessionInterface $session
    ) {}

    public function page(string $name): void {
        $viewPath = APP_PATH . "/views/pages/$name.php";

        if (!file_exists($viewPath)) {
            throw new NotFoundException("View $name does not exist");
        }

        extract($this->defaultData());

        include_once $viewPath;
    }

    private function defaultData(): array {
        return [
          'view' => $this,
          'session' => $this->session
        ];
    }

    public function component(string $name): void {
        $componentPath = APP_PATH . "/views/components/$name.php";

        if (!file_exists($componentPath)) {
            echo "Component $name not found";
            return;
        }

        include_once $componentPath;
    }
}