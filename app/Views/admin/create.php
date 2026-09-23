<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu Juhu Singkah - Admin</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            500: '#6366F1',
                            600: '#4f46e5',
                        },
                        accent: {
                            DEFAULT: '#FDE68A',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen py-10 px-4">

    <div class="max-w-2xl mx-auto">
        
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-extrabold text-slate-900">Tambah Menu Makanan Baru</h1>
                <p class="text-xs text-slate-500 mt-1">Masukkan rincian variasi hidangan Juhu Singkah baru</p>
            </div>
            <a href="<?= base_url('/admin'); ?>" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 rounded-xl text-xs font-bold hover:bg-slate-100 transition inline-flex items-center gap-1.5">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="bg-rose-50 border border-rose-200 text-rose-700 px-4 py-3 rounded-xl mb-6 text-xs space-y-1">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><i class="fa-solid fa-circle-exclamation mr-1"></i> <?= esc($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-8">
            <form action="<?= base_url('/admin/store'); ?>" method="post" class="space-y-6">
                <?= csrf_field(); ?>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Nama Makanan *</label>
                    <input type="text" name="nama_makanan" required placeholder="Contoh: Juhu Singkah Ikan Patin Kuah Pedas" value="<?= old('nama_makanan'); ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Kategori</label>
                        <select name="kategori" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none font-medium">
                            <option value="Original">Original Dayak</option>
                            <option value="Seafood / Sungai">Seafood / Sungai</option>
                            <option value="Spesial">Spesial Rempah</option>
                            <option value="Pedas">Kuah Pedas</option>
                            <option value="Segar">Kuah Segar</option>
                            <option value="Healthy">Healthy / Non-Santan</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Harga (Rp) *</label>
                        <input type="number" name="harga" required placeholder="25000" value="<?= old('harga'); ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Stok Porsi *</label>
                        <input type="number" name="stok" required placeholder="20" value="<?= old('stok', 20); ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">URL Gambar Makanan</label>
                        <input type="url" name="gambar" placeholder="https://images.unsplash.com/..." value="<?= old('gambar'); ?>" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Deskripsi Makanan</label>
                    <textarea name="deskripsi" rows="4" placeholder="Jelaskan cita rasa dan racikan khas dari variasi Juhu Singkah ini..." class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none"><?= old('deskripsi'); ?></textarea>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-end space-x-3">
                    <a href="<?= base_url('/admin'); ?>" class="px-5 py-2.5 rounded-xl text-xs font-bold text-slate-600 hover:bg-slate-100 transition">Batal</a>
                    <button type="submit" class="bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm px-6 py-2.5 rounded-xl shadow-md transition inline-flex items-center gap-2">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan Menu
                    </button>
                </div>

            </form>
        </div>

    </div>

</body>
</html>
