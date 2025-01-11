<?php
namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'user_client';  
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
    protected $returnType = 'array';

    // Tambahkan untuk debugging
    public function findUser($username) 
    {
        $user = $this->where('username', $username)->first();
        log_message('debug', 'Found user: ' . print_r($user, true));
        return $user;
    }
}