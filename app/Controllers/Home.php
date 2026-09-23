<?php

namespace App\Controllers;

use App\Models\JuhuSingkahModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new JuhuSingkahModel();

        // Check if DB table has records; if 0, attempt auto-seed
        try {
            if ($model->countAllResults() === 0) {
                $seeder = \Config\Database::seeder();
                $seeder->call('App\Database\Seeds\JuhuSingkahSeeder');
            }
        } catch (\Throwable $e) {
            // Silence if table not migrated yet
        }

        $search = $this->request->getGet('q');
        $kategori = $this->request->getGet('kategori');

        if ($search) {
            $model->like('nama_makanan', $search)->orLike('deskripsi', $search);
        }

        if ($kategori && $kategori !== 'Semua') {
            $model->where('kategori', $kategori);
        }

        $data['makanan'] = $model->findAll();
        $data['search'] = $search;
        $data['kategori_selected'] = $kategori ?? 'Semua';

        return view('homepage', $data);
    }

    public function detail($id = null)
    {
        $model = new JuhuSingkahModel();
        $item = $model->find($id);

        if (!$item) {
            return redirect()->to('/')->with('error', 'Menu Juhu Singkah tidak ditemukan.');
        }

        // Get related recommendations from same or other categories
        $related = $model->where('id !=', $id)->limit(3)->findAll();

        $data = [
            'item'    => $item,
            'related' => $related,
        ];

        return view('detail', $data);
    }
}
