<?php

namespace App\Models;

use CodeIgniter\Model;

class JuhuSingkahModel extends Model
{
    protected $table            = 'juhu_singkah';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_makanan', 'deskripsi', 'harga', 'stok', 'kategori', 'gambar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
