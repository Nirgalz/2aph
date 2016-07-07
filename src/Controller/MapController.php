<?php
namespace App\Controller;

use App\Controller\AppController;

class MapController extends AppController
{
    public function index(){
        $this->viewBuilder()->layout('header');
    }
}