<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class Program extends BaseController
{
    public function index()
    {
        $programModel = new ProgramModel();

        // Ambil program yang aktif
        $programs = $programModel->getActivePrograms();

        echo view('header_view');
        echo view('programdonasi_view', ['programs' => $programs]);
        echo view('footer_view');
    }
}

