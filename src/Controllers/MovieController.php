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
        $file = $this->request()->file('image');

        $filePath = $file->move('movies');

        dd($this->storage()->url('asd.jpg'));


        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50']
        ]);

        if (!$validation) {
            foreach($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/admin/movies/add');
        }

        $id = $this->db()->insert('movies', [
            'name' => $this->request()->input('name'),
        ]);

        dd($id);
    }
}