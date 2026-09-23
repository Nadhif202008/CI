<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Juhu Singkah</title>
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
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <!-- Logo Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-brand-500 text-white rounded-2xl flex items-center justify-center mx-auto mb-3 text-2xl shadow-lg shadow-brand-500/30">
                <i class="fa-solid fa-user-shield"></i>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-900">Login Administrator</h1>
            <p class="text-slate-500 text-sm mt-1">Kelola Menu & Stok Juhu Singkah</p>
        </div>

        <!-- Alert Error Flash Message -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm flex items-center gap-3 shadow-sm">
                <i class="fa-solid fa-circle-exclamation text-red-500 text-lg"></i>
                <div><?= session()->getFlashdata('error'); ?></div>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('info')): ?>
            <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-xl mb-6 text-sm flex items-center gap-3 shadow-sm">
                <i class="fa-solid fa-circle-info text-blue-500 text-lg"></i>
                <div><?= session()->getFlashdata('info'); ?></div>
            </div>
        <?php endif; ?>

        <!-- Card Login Form -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-200/80 p-8">
            <form action="<?= base_url('/login/process'); ?>" method="post" class="space-y-5">
                <?= csrf_field(); ?>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Username / Email</label>
                    <div class="relative">
                        <i class="fa-solid fa-user absolute left-4 top-3.5 text-slate-400"></i>
                        <input type="text" name="username" required placeholder="admin" value="admin" class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition font-medium">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Password</label>
                    <div class="relative">
                        <i class="fa-solid fa-lock absolute left-4 top-3.5 text-slate-400"></i>
                        <input type="password" name="password" required placeholder="admin123" value="admin123" class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition font-medium">
                    </div>
                </div>

                <div class="bg-accent-light/60 border border-accent/60 rounded-xl p-3.5 text-xs text-slate-700 flex items-center justify-between">
                    <span><i class="fa-solid fa-key text-accent-dark mr-1"></i> Demo Login:</span>
                    <span class="font-bold bg-white px-2 py-0.5 rounded text-slate-900 border">admin / admin123</span>
                </div>

                <button type="submit" class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-brand-500/25 transition duration-200 flex items-center justify-center gap-2">
                    <i class="fa-solid fa-right-to-bracket"></i> Masuk Admin
                </button>
            </form>

            <div class="mt-6 pt-6 border-t border-slate-100 text-center">
                <a href="<?= base_url('/'); ?>" class="text-slate-500 hover:text-brand-500 text-xs font-semibold inline-flex items-center gap-1 transition">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Halaman Utama
                </a>
            </div>
        </div>
    </div>

</body>
</html>
