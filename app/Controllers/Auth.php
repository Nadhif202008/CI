<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/admin');
        }
        return view('auth/login');
    }

    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Admin authentication check
        if (($username === 'admin' || $username === 'admin@gmail.com') && ($password === 'admin123' || $password === 'admin')) {
            session()->set([
                'username'  => $username,
                'name'      => 'Administrator Juhu Singkah',
                'logged_in' => true,
            ]);
            return redirect()->to('/admin')->with('success', 'Selamat datang di Panel Admin Juhu Singkah!');
        }

        return redirect()->back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('info', 'Anda berhasil keluar dari sistem.');
    }
}
