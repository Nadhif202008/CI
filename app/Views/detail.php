<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($item['nama_makanan']); ?> - Detail Juhu Singkah</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366F1',
                            600: '#4f46e5',
                            700: '#4338ca',
                        },
                        accent: {
                            DEFAULT: '#FDE68A',
                            dark: '#f59e0b',
                            light: '#fef3c7',
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
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <!-- Header Navigation -->
    <header class="bg-white shadow-sm border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <a href="<?= base_url('/'); ?>" class="w-11 h-11 rounded-xl bg-brand-500 text-white flex items-center justify-center font-bold text-xl shadow-md">
                    <i class="fa-solid fa-utensils"></i>
                </a>
                <div>
                    <span class="text-2xl font-extrabold tracking-tight text-slate-900">Juhu<span class="text-brand-500">Singkah</span></span>
                    <span class="block text-xs font-semibold text-slate-500 uppercase tracking-wider">Kuliner Khas Dayak</span>
                </div>
            </div>

            <nav class="hidden md:flex items-center space-x-8 font-medium text-slate-600">
                <a href="<?= base_url('/'); ?>" class="hover:text-brand-500 transition flex items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Menu Utama
                </a>
            </nav>

            <div>
                <a href="<?= base_url('/'); ?>" class="bg-brand-500 hover:bg-brand-600 text-white px-5 py-2.5 rounded-xl font-semibold shadow-sm transition inline-flex items-center gap-2 text-sm">
                    <i class="fa-solid fa-house"></i> Beranda
                </a>
            </div>
        </div>
    </header>

    <!-- Main Detail Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex-grow w-full">

        <!-- Breadcrumb Navigation -->
        <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-8">
            <a href="<?= base_url('/'); ?>" class="hover:text-brand-500">Beranda</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <span class="text-slate-400">Juhu Singkah</span>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <span class="text-brand-600 font-bold"><?= esc($item['nama_makanan']); ?></span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Column: Image Visual & AI Tag -->
            <div class="lg:col-span-5 space-y-6">
                <div class="relative bg-white p-3 rounded-3xl border border-slate-200 shadow-lg overflow-hidden group">
                    <div class="relative h-80 sm:h-96 rounded-2xl overflow-hidden bg-slate-900">
                        <img src="<?= esc($item['gambar']); ?>" alt="<?= esc($item['nama_makanan']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                        
                        <!-- AI Visual Badge -->
                        <span class="absolute top-4 left-4 bg-brand-600/90 backdrop-blur text-white text-xs font-bold px-3.5 py-1.5 rounded-full shadow-lg inline-flex items-center gap-1.5 border border-white/20">
                            <i class="fa-solid fa-wand-magic-sparkles text-accent"></i> Visual Gambar AI High-Res
                        </span>

                        <span class="absolute bottom-4 left-4 bg-slate-900/80 backdrop-blur text-accent px-3 py-1 rounded-lg text-xs font-bold uppercase tracking-wider">
                            <?= esc($item['kategori'] ?? 'Khas Dayak'); ?>
                        </span>
                    </div>
                </div>

                <!-- Recipe Highlights & Badges -->
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm">
                        <i class="fa-solid fa-clock text-brand-500 text-xl mb-1"></i>
                        <span class="block text-[11px] font-bold text-slate-400 uppercase">Waktu Masak</span>
                        <strong class="text-xs text-slate-800">45 Menit</strong>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm">
                        <i class="fa-solid fa-fire text-amber-500 text-xl mb-1"></i>
                        <span class="block text-[11px] font-bold text-slate-400 uppercase">Tingkat Pedas</span>
                        <strong class="text-xs text-slate-800">Sedang</strong>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm">
                        <i class="fa-solid fa-leaf text-emerald-500 text-xl mb-1"></i>
                        <span class="block text-[11px] font-bold text-slate-400 uppercase">Bahan</span>
                        <strong class="text-xs text-slate-800">100% Alami</strong>
                    </div>
                </div>
            </div>

            <!-- Right Column: Product Detail & Portion Calculator -->
            <div class="lg:col-span-7 space-y-8">
                
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-accent text-slate-900 font-extrabold text-xs px-3.5 py-1 rounded-full uppercase tracking-wider">
                            Variasi Spesial
                        </span>
                        <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full flex items-center gap-1">
                            <i class="fa-solid fa-circle text-[8px]"></i> Stok Tersedia (<?= esc($item['stok']); ?> porsi)
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
                        <?= esc($item['nama_makanan']); ?>
                    </h1>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="text-3xl font-extrabold text-brand-600">
                            Rp <span id="price-display"><?= number_format($item['harga'], 0, ',', '.'); ?></span>
                        </div>
                        <span class="text-xs text-slate-400 font-medium">/ porsi lengkap</span>
                    </div>

                    <p class="text-slate-600 text-sm leading-relaxed mb-6">
                        <?= esc($item['deskripsi']); ?>
                    </p>
                </div>

                <!-- Ingredients List -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                    <h3 class="font-bold text-slate-900 text-sm uppercase tracking-wider mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-mortar-pestle text-brand-500"></i> Bahan & Rempah Utama
                    </h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs text-slate-700 font-semibold">
                        <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center gap-2">
                            <i class="fa-solid fa-check text-brand-500"></i> Umbut Rotan Muda
                        </div>
                        <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center gap-2">
                            <i class="fa-solid fa-check text-brand-500"></i> Kunyit & Lengkuas
                        </div>
                        <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center gap-2">
                            <i class="fa-solid fa-check text-brand-500"></i> Serai & Bawang Merah
                        </div>
                        <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center gap-2">
                            <i class="fa-solid fa-check text-brand-500"></i> Daging Ikan / Udang
                        </div>
                        <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center gap-2">
                            <i class="fa-solid fa-check text-brand-500"></i> Daun Kemangi Fresh
                        </div>
                        <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-100 flex items-center gap-2">
                            <i class="fa-solid fa-check text-brand-500"></i> Kaldu Rempah Alami
                        </div>
                    </div>
                </div>

                <!-- Portion Calculator & Order Box -->
                <div class="bg-gradient-to-r from-brand-50 via-indigo-50 to-white p-6 rounded-3xl border border-brand-100 shadow-sm space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                <i class="fa-solid fa-calculator text-brand-500"></i> Hitung Porsi Pesanan
                            </label>
                            <span class="text-xs text-slate-500">Pilih jumlah porsi untuk melihat estimasi total harga</span>
                        </div>

                        <!-- Interactive Counter Buttons -->
                        <div class="flex items-center space-x-3 bg-white p-1.5 rounded-2xl border border-slate-200 shadow-sm">
                            <button type="button" onclick="updatePortion(-1)" class="w-9 h-9 bg-slate-100 hover:bg-slate-200 text-slate-700 font-extrabold rounded-xl transition text-base">-</button>
                            <span id="portion-count" class="w-8 text-center font-extrabold text-slate-900 text-lg">1</span>
                            <button type="button" onclick="updatePortion(1)" class="w-9 h-9 bg-brand-500 hover:bg-brand-600 text-white font-extrabold rounded-xl transition text-base">+</button>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-brand-100 flex items-center justify-between">
                        <div>
                            <span class="text-xs text-slate-500 font-semibold block">Total Estimasi Pembayaran:</span>
                            <span class="text-2xl font-extrabold text-brand-700">Rp <span id="total-price-display"><?= number_format($item['harga'], 0, ',', '.'); ?></span></span>
                        </div>

                        <a href="https://api.whatsapp.com/send?text=Halo,%20saya%20ingin%20memesan%20<?= urlencode($item['nama_makanan']); ?>" target="_blank" class="bg-brand-500 hover:bg-brand-600 text-white px-7 py-3.5 rounded-2xl font-bold shadow-lg shadow-brand-500/25 transition inline-flex items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Pesan Sekarang
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Rating & Reviews Section -->
        <section class="mt-16 bg-white p-8 sm:p-10 rounded-3xl border border-slate-200 shadow-sm">
            <h3 class="text-xl font-extrabold text-slate-900 mb-6 flex items-center gap-2">
                <i class="fa-solid fa-star text-accent-dark"></i> Ulasan & Rating Pelanggan
            </h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <div class="flex items-center gap-1 text-accent-dark text-xs mb-2">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-slate-600 italic mb-3">"Rasa umbut rotannya sangat autentik khas Dayak! Kuah kuningnya gurih alami dan ikannya segar sekali."</p>
                    <div class="font-bold text-xs text-slate-900">— Budi S., Palangkaraya</div>
                </div>

                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <div class="flex items-center gap-1 text-accent-dark text-xs mb-2">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-slate-600 italic mb-3">"Menu Juhu Singkah favorit keluarga saat makan siang. Porsinya mantap dan aromanya bikin nambah nasi!"</p>
                    <div class="font-bold text-xs text-slate-900">— Maya R., Kapuas</div>
                </div>

                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <div class="flex items-center gap-1 text-accent-dark text-xs mb-2">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-slate-600 italic mb-3">"Pelayanan cepat dan masakan rotan mudanya empuk tidak pahit. Sangat direkomendasikan!"</p>
                    <div class="font-bold text-xs text-slate-900">— Ahmad F., Banjarmasin</div>
                </div>
            </div>
        </section>

        <!-- Related Recommendations -->
        <?php if (!empty($related)): ?>
            <section class="mt-16">
                <h3 class="text-xl font-extrabold text-slate-900 mb-6">Rekomendasi Variasi Juhu Singkah Lainnya</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <?php foreach ($related as $rel): ?>
                        <a href="<?= base_url('/detail/' . $rel['id']); ?>" class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition flex items-center space-x-4 group">
                            <img src="<?= esc($rel['gambar']); ?>" alt="<?= esc($rel['nama_makanan']); ?>" class="w-16 h-16 rounded-xl object-cover">
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm group-hover:text-brand-500 transition line-clamp-1"><?= esc($rel['nama_makanan']); ?></h4>
                                <span class="text-xs font-bold text-brand-600 block mt-1">Rp <?= number_format($rel['harga'], 0, ',', '.'); ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-8 mt-auto border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs">
            &copy; <?= date('Y'); ?> Juhu Singkah Dayak Culinary - CodeIgniter 4 Exam Project.
        </div>
    </footer>

    <!-- Portion Calculator JS Script -->
    <script>
        const unitPrice = <?= (int)$item['harga']; ?>;
        let currentPortion = 1;

        function updatePortion(delta) {
            currentPortion += delta;
            if (currentPortion < 1) currentPortion = 1;
            
            document.getElementById('portion-count').innerText = currentPortion;
            
            const total = unitPrice * currentPortion;
            document.getElementById('total-price-display').innerText = total.toLocaleString('id-ID');
        }
    </script>

</body>
</html>
