<?php
namespace App\Controller;

use App\Controller\AppController;

class ContactController extends AppController
{
    public function index(){
        $this->viewBuilder()->layout('header');
    }
}