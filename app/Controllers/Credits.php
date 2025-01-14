<?php
namespace App\Controllers;

class Credits extends BaseController
{
    public function index()
    {
        echo view('header_view');
        echo view('credits_view');
    }
}