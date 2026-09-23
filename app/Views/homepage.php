<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juhu Singkah - Kuliner Khas Dayak Kalimantan</title>
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
                    <span class="block text-xs font-semibold text-slate-500 uppercase tracking-wider">Warung Khas Dayak</span>
                </div>
            </div>

            <nav class="hidden md:flex items-center space-x-8 font-medium text-slate-600">
                <a href="<?= base_url('/'); ?>" class="text-brand-500 font-semibold flex items-center gap-2">
                    <i class="fa-solid fa-house"></i> Beranda
                </a>
                <a href="#menu-section" class="hover:text-brand-500 transition flex items-center gap-2">
                    <i class="fa-solid fa-bowl-food"></i> Daftar Menu
                </a>
                <a href="#tentang" class="hover:text-brand-500 transition flex items-center gap-2">
                    <i class="fa-solid fa-circle-info"></i> Tentang Umbut Rotan
                </a>
            </nav>

            <div>
                <?php if (session()->get('logged_in')): ?>
                    <a href="<?= base_url('/admin'); ?>" class="bg-brand-500 hover:bg-brand-600 text-white px-5 py-2.5 rounded-xl font-semibold shadow-sm transition inline-flex items-center gap-2 text-sm">
                        <i class="fa-solid fa-gauge"></i> Dashboard Admin
                    </a>
                <?php else: ?>
                    <a href="<?= base_url('/login'); ?>" class="bg-brand-500 hover:bg-brand-600 text-white px-5 py-2.5 rounded-xl font-semibold shadow-sm transition inline-flex items-center gap-2 text-sm">
                        <i class="fa-solid fa-right-to-bracket"></i> Login Admin
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="relative bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#6366F1_1px,transparent_1px)] [background-size:16px_16px]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-flex items-center gap-2 bg-accent text-slate-900 font-bold text-xs uppercase px-3.5 py-1.5 rounded-full mb-6 shadow-sm">
                    <i class="fa-solid fa-star text-accent-dark"></i> Kuliner Warisan Khas Dayak
                </span>
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight mb-6">
                    Nikmati Kelezatan Alami <span class="text-accent underline decoration-brand-500 decoration-4 underline-offset-4">Juhu Singkah</span> Rotan Muda
                </h1>
                <p class="text-slate-300 text-lg leading-relaxed mb-8">
                    Juhu Singkah adalah masakan tradisional berbahan dasar rotan muda (umbut rotan) kaya serat dengan bumbu kuning kaya rempah alami khas Kalimantan Tengah.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#menu-section" class="bg-accent hover:bg-accent-dark text-slate-900 px-7 py-3.5 rounded-xl font-bold transition shadow-lg inline-flex items-center gap-2">
                        <i class="fa-solid fa-utensils"></i> Lihat 8 Variasi Menu
                    </a>
                    <a href="#tentang" class="bg-white/10 hover:bg-white/20 text-white backdrop-blur border border-white/20 px-6 py-3.5 rounded-xl font-semibold transition inline-flex items-center gap-2">
                        <i class="fa-solid fa-book-open"></i> Resep & Cerita
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-80 sm:h-96 rounded-3xl overflow-hidden shadow-2xl border-4 border-white/10 relative group">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80" alt="Juhu Singkah Umbut Rotan" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4 bg-brand-600/90 backdrop-blur text-white text-xs font-bold px-3 py-1 rounded-full border border-white/20">
                        <i class="fa-solid fa-wand-magic-sparkles text-accent"></i> Gambar Visual AI Studio
                    </div>
                    <div class="absolute bottom-6 left-6 right-6 p-4 bg-slate-900/90 backdrop-blur rounded-2xl border border-white/10 flex items-center justify-between">
                        <div>
                            <p class="text-xs text-accent font-bold uppercase tracking-wider">Sajian Utama Hari Ini</p>
                            <h3 class="font-bold text-white text-lg">Juhu Singkah Original Dayak</h3>
                        </div>
                        <span class="bg-brand-500 text-white px-4 py-1.5 rounded-lg font-bold">Rp 25.000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex-grow" id="menu-section">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6 border-b border-slate-200 pb-8">
            <div>
                <div class="inline-flex items-center gap-2 text-brand-500 font-bold text-sm uppercase tracking-wider mb-2">
                    <i class="fa-solid fa-fire"></i> Menu Pilihan Hari Ini
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900">Daftar Variasi Juhu Singkah</h2>
                <p class="text-slate-500 mt-1">Klik pada menu untuk melihat halaman detail lengkap & kalkulator porsi</p>
            </div>

            <!-- Search & Filter Form -->
            <form action="<?= base_url('/'); ?>#menu-section" method="get" class="flex flex-wrap sm:flex-nowrap gap-3">
                <div class="relative flex-grow sm:w-64">
                    <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-3.5 text-slate-400"></i>
                    <input type="text" name="q" value="<?= esc($search ?? ''); ?>" placeholder="Cari nama menu..." class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-300 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none text-sm">
                </div>
                <button type="submit" class="bg-brand-500 hover:bg-brand-600 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition">
                    Cari
                </button>
                <?php if (!empty($search)): ?>
                    <a href="<?= base_url('/'); ?>" class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-4 py-2.5 rounded-xl font-semibold text-sm transition inline-flex items-center gap-1">
                        <i class="fa-solid fa-xmark"></i> Reset
                    </a>
                <?php endif; ?>
            </form>
        </div>

        <!-- Menu Cards Grid -->
        <?php if (empty($makanan)): ?>
            <div class="bg-white rounded-3xl p-12 text-center border border-slate-200 shadow-sm max-w-lg mx-auto">
                <div class="w-16 h-16 bg-indigo-50 text-brand-500 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">
                    <i class="fa-solid fa-bowl-rice"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Menu Tidak Ditemukan</h3>
                <p class="text-slate-500 text-sm mb-6">Kata kunci pencarian tidak cocok dengan daftar menu Juhu Singkah.</p>
                <a href="<?= base_url('/'); ?>" class="bg-brand-500 text-white px-5 py-2.5 rounded-xl font-semibold text-sm inline-block">Tampilkan Semua Menu</a>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($makanan as $item): ?>
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden flex flex-col hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                        
                        <!-- Card Image Header -->
                        <a href="<?= base_url('/detail/' . $item['id']); ?>" class="relative h-48 overflow-hidden bg-slate-100 block">
                            <img src="<?= esc($item['gambar']); ?>" alt="<?= esc($item['nama_makanan']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <span class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur text-accent px-3 py-1 rounded-lg text-xs font-bold uppercase tracking-wider">
                                <?= esc($item['kategori'] ?? 'Dayak Food'); ?>
                            </span>
                            <span class="absolute bottom-3 right-3 bg-brand-500 text-white font-extrabold px-3 py-1 rounded-lg text-sm shadow">
                                Rp <?= number_format($item['harga'], 0, ',', '.'); ?>
                            </span>
                        </a>

                        <!-- Card Body -->
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-bold text-slate-900 text-lg mb-2 line-clamp-1 group-hover:text-brand-500 transition">
                                <a href="<?= base_url('/detail/' . $item['id']); ?>">
                                    <?= esc($item['nama_makanan']); ?>
                                </a>
                            </h3>
                            <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-3 flex-grow">
                                <?= esc($item['deskripsi']); ?>
                            </p>

                            <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold">
                                    <i class="fa-solid fa-boxes-stacked text-brand-500"></i> Stok: <?= esc($item['stok']); ?>
                                </span>
                                <a href="<?= base_url('/detail/' . $item['id']); ?>" class="bg-brand-50 hover:bg-brand-500 hover:text-white text-brand-600 font-bold text-xs px-3.5 py-1.5 rounded-lg transition inline-flex items-center gap-1">
                                    Detail <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Information Section -->
        <section class="mt-20 bg-gradient-to-r from-brand-50 to-indigo-50 border border-brand-100 rounded-3xl p-8 sm:p-12" id="tentang">
            <div class="grid md:grid-cols-3 gap-8 items-center">
                <div class="md:col-span-2">
                    <span class="text-brand-600 font-bold text-xs uppercase tracking-wider">Seputar Kuliner Kalimantan</span>
                    <h3 class="text-2xl font-extrabold text-slate-900 mt-2 mb-4">Apa Itu Juhu Singkah?</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Juhu Singkah adalah masakan khas masyarakat suku Dayak di Kalimantan Tengah. Bahan dasarnya diambil dari batang rotan muda yang dipotong halus dan dimasak bersama bumbu rempah kuning seperti kunyit, serai, lengkuas, dan bawang merah.
                    </p>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Rotan muda memberikan tekstur agak renyah dan cita rasa gurih khas dengan sedikit sentuhan pahit alami yang segar saat disantap bersama nasi hangat.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-brand-100 shadow-sm text-center">
                    <div class="w-14 h-14 bg-accent text-slate-900 rounded-full flex items-center justify-center mx-auto mb-3 font-bold text-xl">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-1">100% Bahan Alami</h4>
                    <p class="text-xs text-slate-500 mb-4">Rotan muda pilihan dari hutan tropis Kalimantan</p>
                    <span class="inline-block bg-brand-500 text-white text-xs font-bold px-4 py-2 rounded-xl">Kaya Serat & Sehat</span>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-10 mt-auto border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 rounded-lg bg-brand-500 text-white flex items-center justify-center font-bold text-sm">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <span class="text-lg font-bold text-white">JuhuSingkah <span class="text-accent text-xs">Kuliner Dayak</span></span>
            </div>
            <p class="text-xs text-slate-400">
                &copy; <?= date('Y'); ?> Ujian Vibe Code - Aplikasi Kuliner Khas Juhu Singkah. CodeIgniter 4 & Tailwind CSS.
            </p>
            <div class="flex items-center space-x-4 text-xs font-medium">
                <a href="<?= base_url('/login'); ?>" class="hover:text-accent transition">Admin Login</a>
            </div>
        </div>
    </footer>

</body>
</html>
