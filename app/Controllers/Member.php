<?php
namespace App\Controllers;

class Member extends BaseController
{
    public function index()
    {
        // Debug session
        log_message('debug', 'Session data: ' . print_r(session()->get(), true));

        if (!session()->get('logged_in')) {
            log_message('debug', 'User not logged in, redirecting to login');
            return redirect()->to('login');
        }

        // Debug if we reach here
        log_message('debug', 'Showing member view for user: ' . session()->get('username'));
        return view('member_view');
    }
}