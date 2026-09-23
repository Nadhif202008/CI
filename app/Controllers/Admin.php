<?php

namespace App\Controllers;

use App\Models\JuhuSingkahModel;

class Admin extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new JuhuSingkahModel();
    }

    private function checkAuth()
    {
        if (!session()->get('logged_in')) {
            return false;
        }
        return true;
    }

    public function index()
    {
        if (!$this->checkAuth()) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $data['makanan'] = $this->model->orderBy('id', 'DESC')->findAll();
        return view('admin/index', $data);
    }

    public function create()
    {
        if (!$this->checkAuth()) {
            return redirect()->to('/login');
        }

        return view('admin/create');
    }

    public function store()
    {
        if (!$this->checkAuth()) {
            return redirect()->to('/login');
        }

        $rules = [
            'nama_makanan' => 'required|min_length[3]',
            'harga'        => 'required|numeric',
            'stok'         => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $gambarUrl = $this->request->getPost('gambar');
        if (empty($gambarUrl)) {
            $gambarUrl = 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80';
        }

        $this->model->save([
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
            'harga'        => $this->request->getPost('harga'),
            'stok'         => $this->request->getPost('stok'),
            'kategori'     => $this->request->getPost('kategori'),
            'gambar'       => $gambarUrl,
        ]);

        return redirect()->to('/admin')->with('success', 'Data menu Juhu Singkah berhasil ditambahkan!');
    }

    public function edit($id = null)
    {
        if (!$this->checkAuth()) {
            return redirect()->to('/login');
        }

        $data['makanan'] = $this->model->find($id);
        if (!$data['makanan']) {
            return redirect()->to('/admin')->with('error', 'Data tidak ditemukan.');
        }

        return view('admin/edit', $data);
    }

    public function update($id = null)
    {
        if (!$this->checkAuth()) {
            return redirect()->to('/login');
        }

        $rules = [
            'nama_makanan' => 'required|min_length[3]',
            'harga'        => 'required|numeric',
            'stok'         => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $gambarUrl = $this->request->getPost('gambar');
        if (empty($gambarUrl)) {
            $gambarUrl = 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80';
        }

        $this->model->update($id, [
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'deskripsi'    => $this->request->getPost('deskripsi'),
            'harga'        => $this->request->getPost('harga'),
            'stok'         => $this->request->getPost('stok'),
            'kategori'     => $this->request->getPost('kategori'),
            'gambar'       => $gambarUrl,
        ]);

        return redirect()->to('/admin')->with('success', 'Data menu Juhu Singkah berhasil diperbarui!');
    }

    public function delete($id = null)
    {
        if (!$this->checkAuth()) {
            return redirect()->to('/login');
        }

        $this->model->delete($id);
        return redirect()->to('/admin')->with('success', 'Data menu Juhu Singkah berhasil dihapus!');
    }
}
