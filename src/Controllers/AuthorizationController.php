<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class AuthorizationController extends Controller {
    public function index(): void {
        $this->view('authorization');
    }

    public function authorization(): void {
        $email = $this->request()->input('email');
        $password = $this->request()->input('password');
        $this->auth()->attempt($email, $password);
    }
}