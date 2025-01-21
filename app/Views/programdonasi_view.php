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
        <!-- Program Aktif Section -->
        <h1 class="text-[50px] font-bold mb-4">Program Sumbangan & Donasi Terkini</h1>
        <p class="text-gray-700 mb-8">
            Temukan berbagai program donasi terkini yang dapat Anda dukung. Bersama kita bisa membantu lebih banyak
            orang
            yang membutuhkan.<br /> Pilih program yang sesuai dengan hati Anda dan mulai berdonasi sekarang.
        </p>

        <?php if (!empty($programs)): ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <?php foreach ($programs as $program): ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2"><?= esc($program['nama_program']) ?></h3>
                            <p class="text-gray-600 mb-4"><?= esc($program['deskripsi']) ?></p>
                            <div class="mb-4">
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <?php
                                    $percentage = ($program['terkumpul'] / $program['target']) * 100;
                                    $percentage = min(100, $percentage);
                                    ?>
                                    <div class="bg-purple-600 h-2.5 rounded-full" style="width: <?= $percentage ?>%"></div>
                                </div>
                                <div class="flex flex-col gap-2 text-sm text-gray-600 mt-2">
                                    <div class="flex justify-between">
                                        <span>Terkumpul: Rp<?= number_format($program['terkumpul'], 0, ',', '.') ?></span>
                                        <span>Target: Rp<?= number_format($program['target'], 0, ',', '.') ?></span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Mulai:
                                            <?= ($program['tgl_mulai'] && $program['tgl_mulai'] != '0000-00-00') ? date('d/m/Y', strtotime($program['tgl_mulai'])) : '-' ?></span>
                                        <span>Selesai:
                                            <?= ($program['tgl_selesai'] && $program['tgl_selesai'] != '0000-00-00') ? date('d/m/Y', strtotime($program['tgl_selesai'])) : '-' ?></span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('donate') ?>"
                                class="hover:no-underline block text-center bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700">Donasi
                                Sekarang</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-gray-700">Belum ada program donasi yang aktif saat ini.</p>
        <?php endif; ?>

        <!-- Program Selesai Section -->
        <?php if (!empty($completed_programs)): ?>
            <h2 class="text-3xl font-bold mb-4 mt-12">Program Donasi Yang Telah Selesai</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <?php foreach ($completed_programs as $program): ?>
                    <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold text-xl"><?= esc($program['nama_program']) ?></h3>
                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">Selesai</span>
                            </div>
                            <p class="text-gray-600 mb-4"><?= esc($program['deskripsi']) ?></p>
                            <div class="mb-4">
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-gray-400 h-2.5 rounded-full" style="width: 100%"></div>
                                </div>
                                <div class="flex flex-col gap-2 text-sm text-gray-600 mt-2">
                                    <div class="flex justify-between">
                                        <span>Terkumpul: Rp<?= number_format($program['terkumpul'], 0, ',', '.') ?></span>
                                        <span>Target: Rp<?= number_format($program['target'], 0, ',', '.') ?></span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Mulai:
                                            <?= ($program['tgl_mulai'] && $program['tgl_mulai'] != '0000-00-00') ? date('d/m/Y', strtotime($program['tgl_mulai'])) : '-' ?></span>
                                        <span>Selesai:
                                            <?= ($program['tgl_selesai'] && $program['tgl_selesai'] != '0000-00-00') ? date('d/m/Y', strtotime($program['tgl_selesai'])) : '-' ?></span>
                                    </div>
                                </div>
                            </div>
                            <button disabled
                                class="w-full text-center bg-gray-300 text-gray-600 px-4 py-2 rounded-full cursor-not-allowed">
                                Program Selesai
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>