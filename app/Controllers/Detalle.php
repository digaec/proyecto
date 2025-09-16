<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class Productos extends BaseController
{
    public function index(){
        echo view('header');
        echo view('productos/detalle');        
        echo view('footer');
    }
    
}