<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index(){
        $this->viewBuilder()->layout('header');
    }
}
