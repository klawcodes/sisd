<?php

namespace App\Controllers;

use App\Models\ProgramModel;

class Program extends BaseController
{
    // Di Program.php controller
    public function index()
    {
        $programModel = new ProgramModel();
        // Ambil program yang aktif
        $data = [
            'programs' => $programModel->getActivePrograms(),
            'completed_programs' => $programModel->getCompletedPrograms()
        ];

        echo view('header_view');
        echo view('programdonasi_view', $data);
        echo view('footer_view');
    }
}

