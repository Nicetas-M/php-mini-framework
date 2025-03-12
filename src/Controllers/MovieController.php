<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Kernel\Validator\Validator;
use App\Kernel\View\View;

class MovieController extends Controller {
    public function index() {
        $this->view('movies');
    }

    public function add() {
        $this->view('admin/movies/add');
    }

    public function store() {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50']
        ]);

        if (!$validation) {
            $this->redirect('/admin/movies/add');
            //dd('Validation Failed', $this->request()->errors());
        }

        dd ('Validation Passed');
    }
}