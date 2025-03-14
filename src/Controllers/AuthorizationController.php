<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class AuthorizationController extends Controller {
    public function index(): void {
        $this->view('authorization');
    }
}