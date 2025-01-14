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

        // Generate nomor donasi
        $no_donasi = '3555' . str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT);

        // Proses file upload
        $file = $this->request->getFile('bukti_transfer');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName(); // Generate nama file unik
            $file->move(WRITEPATH . 'uploads', $newName); // Simpan file ke folder uploads
            $bukti_transfer = $newName;
        } else {
            $bukti_transfer = null;
        }

        // Data untuk disimpan
        $data = [
            'no_donasi' => $no_donasi,
            'nm_donatur' => $this->request->getPost('nama'),
            'tgl_donasi' => date('Y-m-d'),
            'id_program' => $this->request->getPost('program'),
            'jmlh_nominal' => $this->request->getPost('nominal'),
            'bukti_transfer' => $bukti_transfer,
            'status' => 0
        ];

        if ($model->masukDonasi($data)) {
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