<?php
namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'tb_program';
    protected $primaryKey = 'id_program';
    protected $allowedFields = ['nama_program', 'deskripsi', 'terkumpul', 'target', 'status', 'tgl_mulai', 'tgl_selesai'];

    public function getActivePrograms()
    {
        return $this->where('status', 1)
            ->findAll();
    }

    public function getTotalDonasi()
    {
        $result = $this->selectSum('terkumpul')
            ->get()
            ->getRow();
        return $result->terkumpul ?? 0;
    }

    public function getTotalProgramAktif()
    {
        return $this->where('status', 1)->countAllResults();
    }

    // Di ProgramModel.php, tambahkan method ini
    public function getCompletedPrograms()
    {
        return $this->where('status', 0)
            ->findAll();
    }


}