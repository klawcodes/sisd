<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('main_view');
        echo view('footer_view');
    }
}
