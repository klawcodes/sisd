<?php
namespace App\Models;
use CodeIgniter\Model;

class DonateModel extends Model
{
    protected $table = "tb_donatur";  // Diubah kembali ke tb_donatur sesuai nama tabel di database
    protected $primaryKey = 'id_donasi';
    protected $allowedFields = ['no_donasi', 'nm_donatur', 'nama_program', 'tgl_donasi', 'id_program', 'jmlh_nominal', 'status'];

    public function masukDonasi($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getPrograms()
    {
        $builder = $this->db->table('tb_program');
        $builder->where('status', 1);
        return $builder->get()->getResult();
    }
    // DonateModel.php
    public function searchDonasi($searchTerm)
    {
        return $this->table('tb_donatur')
            ->select('tb_donatur.*, tb_program.nama_program')
            ->join('tb_program', 'tb_program.id_program = tb_donatur.id_program')
            ->like('no_donasi', $searchTerm)
            ->get()
            ->getResultArray();
    }
    public function getTotalDonatur()
    {
        return $this->where('status', 1)->countAllResults();
    }
}