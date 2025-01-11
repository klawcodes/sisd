<?php
namespace App\Controllers;
use App\Models\ClientModel;

class Login extends BaseController
{
    public function index()
{
    if ($this->request->getMethod() === 'post') {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Tambahkan log untuk debugging
        log_message('debug', 'Username: ' . $username);
        log_message('debug', 'Password: ' . $password);
        // Debug untuk cek method request
        log_message('debug', 'Request Method: ' . $this->request->getMethod());

        // Load model dan cek user
        $clientModel = new ClientModel();
        $client = $clientModel->where('username', $username)->first();
        
        // Log hasil query
        log_message('debug', 'Query result: ' . print_r($client, true));

        if (!$client || $client['password'] !== md5($password)) {
            log_message('debug', 'Login failed: Password tidak cocok');
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('login');
        }

        // Log jika login berhasil
        log_message('debug', 'Login success for user: ' . $username);
        
        session()->set([
            'id' => $client['id'],
            'username' => $client['username'],
            'logged_in' => true
        ]);

        return redirect()->to('member');
    }
    return view('login_view');
}
}