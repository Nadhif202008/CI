<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JuhuSingkahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_makanan' => 'Juhu Singkah Original Umbut Rotan',
                'deskripsi'    => 'Masakan tradisional khas Dayak dari rotan muda (umbut rotan) dengan kuah rempah kuning gurih alami.',
                'harga'        => 25000,
                'stok'         => 20,
                'kategori'     => 'Original',
                'gambar'       => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Juhu Singkah Ikan Baung',
                'deskripsi'    => 'Perpaduan rotan muda yang renyah dengan potongan ikan baung sungai yang manis dan kaya protein.',
                'harga'        => 35000,
                'stok'         => 15,
                'kategori'     => 'Seafood / Sungai',
                'gambar'       => 'https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Juhu Singkah Ikan Patin Kuah Kuning',
                'deskripsi'    => 'Olahan umbut rotan gurih asam segar disajikan bersama filet ikan patin segar khas Kapuas.',
                'harga'        => 32000,
                'stok'         => 18,
                'kategori'     => 'Seafood / Sungai',
                'gambar'       => 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Juhu Singkah Haruan (Ikan Gabus)',
                'deskripsi'    => 'Hidangan kesehatan khas Dayak Kalimantan, umbut rotan rempah kuah kuning dipadu ikan gabus segar.',
                'harga'        => 38000,
                'stok'         => 12,
                'kategori'     => 'Spesial',
                'gambar'       => 'https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Juhu Singkah Udang Galah Sungai',
                'deskripsi'    => 'Kenikmatan umbut rotan dipadu udang galah sungai berukuran besar dengan kuah kaldu rempah melimpah.',
                'harga'        => 45000,
                'stok'         => 10,
                'kategori'     => 'Premium',
                'gambar'       => 'https://images.unsplash.com/photo-1565680018434-b513d5e5fd47?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Juhu Singkah Santan Pedas',
                'deskripsi'    => 'Variasi kuah santan hangat bercita rasa pedas gurih dengan aroma serai dan kunyit bakar khas.',
                'harga'        => 28000,
                'stok'         => 25,
                'kategori'     => 'Pedas',
                'gambar'       => 'https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Juhu Singkah Asam Manis Palangkaraya',
                'deskripsi'    => 'Cita rasa segar kuah asam manis kelakai & umbut rotan yang menggugah selera makan siang.',
                'harga'        => 27000,
                'stok'         => 22,
                'kategori'     => 'Segar',
                'gambar'       => 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Juhu Singkah Sup Bening Tradisional',
                'deskripsi'    => 'Versi sup bening rotan muda rendah kalori tanpa santan, kaya akan serat alami dan herbal khas Kalimantan.',
                'harga'        => 24000,
                'stok'         => 30,
                'kategori'     => 'Healthy',
                'gambar'       => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('juhu_singkah')->insertBatch($data);
    }
}
