<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8">
    <h1 class="text-[50px] font-bold mb-4">Program Sumbangan & Donasi Terkini</h1>
    <p class="text-gray-700 mb-8">
        Temukan berbagai program donasi terkini yang dapat Anda dukung. Bersama kita bisa membantu lebih banyak orang 
        yang membutuhkan.<br/> Pilih program yang sesuai dengan hati Anda dan mulai berdonasi sekarang.
    </p>

    <?php if (!empty($programs)): ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <?php foreach ($programs as $program): ?>
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <img src="/api/placeholder/400/200" alt="<?= esc($program['nama_program']) ?>" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2"><?= esc($program['nama_program']) ?></h3>
                        <p class="text-gray-600 mb-4"><?= esc($program['deskripsi']) ?></p>
                        <div class="mb-4">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <?php
                                $percentage = ($program['terkumpul'] / $program['target']) * 100;
                                $percentage = min(100, $percentage); // Pastikan tidak melebihi 100%
                                ?>
                                <div class="bg-purple-600 h-2.5 rounded-full" style="width: <?= $percentage ?>%"></div>
                            </div>
                            <div class="flex justify-between text-sm text-gray-600 mt-2">
                                <span>Terkumpul: Rp<?= number_format($program['terkumpul'], 0, ',', '.') ?></span>
                                <span>Target: Rp<?= number_format($program['target'], 0, ',', '.') ?></span>
                            </div>
                        </div>
                        <a href="<?= base_url('donate') ?>" class="hover:no-underline block text-center bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700">Donasi Sekarang</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-gray-700">Belum ada program donasi yang aktif saat ini.</p>
    <?php endif; ?>
</div>


</body>
</html>
