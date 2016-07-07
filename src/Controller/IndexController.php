<?php
namespace App\Controller;

use App\Controller\AppController;

class IndexController extends AppController
{
    public function index(){
        $this->viewBuilder()->layout('header');
    }
}

