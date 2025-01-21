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
        $page = $this->request->getGet('page') ?? 1;
        
        $data = [
            'donasi' => $this->donateModel->getDonasiPaginated($page),
            'pager' => [
                'total_records' => $this->donateModel->countAllResults(),
                'per_page' => 5,
                'current_page' => $page
            ]
        ];
        echo view('header_view');
        echo view('cekdonasi_view', $data);
    }

    public function search()
{
    $no_donasi = $this->request->getGet('no_donasi');
    
    $data = $this->donateModel->select('tb_donatur.*, tb_program.nama_program')
        ->join('tb_program', 'tb_program.id_program = tb_donatur.id_program')
        ->like('no_donasi', $no_donasi)
        ->orderBy('tgl_donasi', 'DESC')
        ->get()
        ->getResultArray();

    return $this->response->setJSON($data);
}
}