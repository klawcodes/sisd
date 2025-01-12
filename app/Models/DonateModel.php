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
    public function cekDonasi($no_donasi)
    {
        // Tambahkan debugging untuk melihat query yang dijalankan
        $query = $this->db->table($this->table)
            ->select('tb_donasi.*, tb_program.nm_program')
            ->join('tb_program', 'tb_program.id_program = tb_donasi.id_program')
            ->where('no_donasi', $no_donasi);

        log_message('debug', 'SQL Query: ' . $query->getCompiledSelect());

        return $query->get()->getRow();
    }
}