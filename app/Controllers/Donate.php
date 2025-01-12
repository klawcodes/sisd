<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DonateModel;

class Donate extends Controller
{
    public function index()
    {
        $model = new DonateModel();
        $data['programs'] = $model->getPrograms();
        return view('donate_view', $data);
    }

    public function add()
    {
        $model = new DonateModel();
        
        // Generate nomor donasi dengan format: 003555XXXXX
        $no_donasi = '003555' . str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT);
        
        $data = [
            'no_donasi' => $no_donasi,
            'nm_donatur' => $this->request->getPost('nama'),
            'tgl_donasi' => date('Y-m-d'),
            'id_program' => $this->request->getPost('program'),
            'jmlh_nominal' => $this->request->getPost('nominal'),
            'status' => 0
        ];

        if($model->masukDonasi($data)) {
            $session = session();
            $session->setFlashdata('swal_icon', 'success');
            $session->setFlashdata('swal_title', 'Berhasil!');
            $session->setFlashdata('swal_text', 'Donasi berhasil ditambahkan.<br><br/>Nomor Donasi Anda: ' . $no_donasi);
        } else {
            $session = session();
            $session->setFlashdata('swal_icon', 'error');
            $session->setFlashdata('swal_title', 'Gagal!');
            $session->setFlashdata('swal_text', 'Gagal menambah donasi');
        }
        
        return redirect()->to(base_url('donate'));
    }
}