<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('tentangkami_view');
        echo view('footer_view');
    }
}
