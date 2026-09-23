<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Juhu Singkah</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            500: '#6366F1',
                            600: '#4f46e5',
                            700: '#4338ca',
                        },
                        accent: {
                            DEFAULT: '#FDE68A',
                            dark: '#f59e0b',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">

    <!-- Admin Header -->
    <header class="bg-slate-900 text-white border-b border-slate-800 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-lg bg-brand-500 text-white flex items-center justify-center font-bold">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <span class="text-xl font-extrabold tracking-tight">Admin<span class="text-accent">JuhuSingkah</span></span>
            </div>

            <div class="flex items-center space-x-4">
                <a href="<?= base_url('/'); ?>" target="_blank" class="text-xs bg-slate-800 hover:bg-slate-700 text-slate-300 px-3.5 py-2 rounded-lg transition inline-flex items-center gap-1.5 font-medium">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> Lihat Website
                </a>
                <span class="text-slate-600">|</span>
                <div class="flex items-center gap-2 text-xs font-semibold text-slate-300">
                    <i class="fa-solid fa-user-circle text-brand-500 text-base"></i> Administrator
                </div>
                <a href="<?= base_url('/logout'); ?>" class="bg-red-500/20 text-red-400 hover:bg-red-500 hover:text-white text-xs px-3 py-1.5 rounded-lg transition font-bold">
                    <i class="fa-solid fa-right-from-bracket"></i> Keluar
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex-grow w-full">

        <!-- Flash Alert -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-5 py-4 rounded-2xl mb-8 text-sm flex items-center justify-between shadow-sm">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-600 text-lg"></i>
                    <span class="font-semibold"><?= session()->getFlashdata('success'); ?></span>
                </div>
            </div>
        <?php endif; ?>

        <!-- Dashboard Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Menu</span>
                    <h3 class="text-3xl font-extrabold text-slate-900 mt-1"><?= count($makanan); ?> <span class="text-xs text-slate-500 font-normal">variasi</span></h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-bowl-food"></i>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Tema Warna</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-[#6366F1] inline-block shadow-sm"></span> #6366F1
                        <span class="w-4 h-4 rounded-full bg-[#FDE68A] inline-block shadow-sm border"></span> #FDE68A
                    </h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-accent text-slate-900 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-palette"></i>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Status Ujian</span>
                    <h3 class="text-sm font-bold text-emerald-600 mt-1 flex items-center gap-1.5">
                        <i class="fa-solid fa-circle text-xs"></i> 8 Variasi Siap Disajikan
                    </h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-check-double"></i>
                </div>
            </div>
        </div>

        <!-- Table Container Header -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl font-extrabold text-slate-900">Kelola Menu Juhu Singkah</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Tambah, edit, atau hapus item hidangan rotan muda</p>
                </div>
                <a href="<?= base_url('/admin/create'); ?>" class="bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm px-5 py-2.5 rounded-xl shadow-md transition inline-flex items-center gap-2 self-start sm:self-auto">
                    <i class="fa-solid fa-plus"></i> Tambah Menu Baru
                </a>
            </div>

            <!-- Table List -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider border-b border-slate-200">
                            <th class="py-4 px-6">No</th>
                            <th class="py-4 px-6">Gambar</th>
                            <th class="py-4 px-6">Nama Makanan</th>
                            <th class="py-4 px-6">Kategori</th>
                            <th class="py-4 px-6">Harga</th>
                            <th class="py-4 px-6">Stok</th>
                            <th class="py-4 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm font-medium">
                        <?php if (empty($makanan)): ?>
                            <tr>
                                <td colspan="7" class="py-8 text-center text-slate-400">Belum ada data menu makanan.</td>
                            </tr>
                        <?php else: ?>
                            <?php $no = 1; foreach ($makanan as $item): ?>
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="py-4 px-6 font-semibold text-slate-400"><?= $no++; ?></td>
                                    <td class="py-4 px-6">
                                        <img src="<?= esc($item['gambar']); ?>" alt="<?= esc($item['nama_makanan']); ?>" class="w-12 h-12 rounded-xl object-cover border border-slate-200 shadow-sm">
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="font-bold text-slate-900"><?= esc($item['nama_makanan']); ?></div>
                                        <div class="text-xs text-slate-400 line-clamp-1 max-w-xs"><?= esc($item['deskripsi']); ?></div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="bg-accent-light text-slate-800 text-xs font-bold px-3 py-1 rounded-lg">
                                            <?= esc($item['kategori'] ?? 'Dayak'); ?>
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 font-bold text-brand-600">
                                        Rp <?= number_format($item['harga'], 0, ',', '.'); ?>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="font-semibold text-slate-700"><?= esc($item['stok']); ?> porsi</span>
                                    </td>
                                    <td class="py-4 px-6 text-center">
                                        <div class="inline-flex items-center space-x-2">
                                            <a href="<?= base_url('/admin/edit/' . $item['id']); ?>" class="bg-amber-100 hover:bg-amber-200 text-amber-800 p-2 rounded-lg transition text-xs font-bold" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                            </a>
                                            <a href="<?= base_url('/admin/delete/' . $item['id']); ?>" onclick="return confirm('Yakin ingin menghapus menu ini?');" class="bg-rose-100 hover:bg-rose-200 text-rose-800 p-2 rounded-lg transition text-xs font-bold" title="Hapus">
                                                <i class="fa-solid fa-trash-can"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>
</html>
