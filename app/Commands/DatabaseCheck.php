<?php
namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class DatabaseCheck extends BaseCommand
{
    protected $group = 'Database';
    protected $name = 'db:check';
    protected $description = 'Cek koneksi database';

    public function run(array $params)
    {
        try {
            $db = \Config\Database::connect();
            $db->query('SELECT 1');
            CLI::write('Koneksi database berhasil!', 'green');
        } catch (\Exception $e) {
            CLI::error('Koneksi database gagal: ' . $e->getMessage());
        }
    }
}