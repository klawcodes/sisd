<?php
namespace App\Controllers;

class CekDonasi extends BaseController
{
    protected $donateModel;

    public function __construct()
    {
        $this->donateModel = new \App\Models\DonateModel();
    }

    public function index()
    {
        $data['donasi'] = $this->donateModel->select('tb_donatur.*, tb_program.nama_program')
            ->join('tb_program', 'tb_program.id_program = tb_donatur.id_program')
            ->orderBy('tgl_donasi', 'DESC')  // Tambahkan ini untuk mengurutkan dari terbaru
            ->findAll();
        
        return view('cekdonasi_view', $data);
    }

    public function search()
    {
        $no_donasi = $this->request->getGet('no_donasi');
        $data = $this->donateModel->select('tb_donatur.*, tb_program.nama_program')
            ->join('tb_program', 'tb_program.id_program = tb_donatur.id_program')
            ->like('no_donasi', $no_donasi)
            ->orderBy('tgl_donasi', 'DESC')  // Tambahkan ini juga di method search
            ->findAll();
            
        return $this->response->setJSON($data);
    }
}