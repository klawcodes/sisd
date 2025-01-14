<?php
namespace App\Controllers;

use App\Models\ProgramModel;
use App\Models\DonateModel;  // Ubah dari DonaturModel ke DonateModel

class Home extends BaseController
{
    public function index()
    {
        $programModel = new ProgramModel();
        $donateModel = new DonateModel();  // Ubah ke DonateModel

        $data = [
            'programs' => $programModel->getActivePrograms(),
            'statistics' => [
                'total_donasi' => $programModel->getTotalDonasi(),
                'total_donatur' => $donateModel->getTotalDonatur(),  // Gunakan DonateModel
                'total_program' => $programModel->getTotalProgramAktif()
            ]
        ];
        
        echo view('header_view');
        echo view('main_view', $data);
        echo view('footer_view');
    }
}