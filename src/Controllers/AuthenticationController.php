<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class AuthenticationController extends Controller {
    public function index(): void {
        $this->view('authentication');
    }

    public function authentication(): void {
        $email = $this->request()->input('email');
        $password = $this->request()->input('password');
        $this->auth()->attempt($email, $password);

        $this->redirect('/movies');
    }

    public function logout(): void {
        $this->auth()->logout();

        $this->redirect('/authentication');
    }
}