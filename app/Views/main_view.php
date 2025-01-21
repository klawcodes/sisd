<!-- Hero Section -->
<section class="relative bg-purple-50">
    <!-- Full width container for background -->
    <div class="relative min-h-[350px] w-full flex items-center justify-center">
        <!-- Background image with gradient overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://assets-a1.kompasiana.com/items/album/2021/10/19/rt-616e71ab06310e319e081db2.jpg"
                alt="Background" class="w-full h-full object-cover" />
            <!-- Gradient overlay from bottom to top -->
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent"></div>
        </div>

        <!-- Content with max-width container -->
        <div class="relative z-10 w-full">
            <div class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Sistem Informasi Sumbangan dan Donasi RT. 003</h1>
                <p class="text-xl text-gray-600 mb-8">Desa Sukangoding, Kecamatan Ciganea, Kelurahan Los Angeles</p>
                <a href="<?= base_url('donate') ?>"
                    class="hover:no-underline inline-block bg-purple-600 text-white px-8 py-3 rounded-full font-medium hover:bg-purple-700 transition duration-150 ease-in-out">
                    Donasi Sekarang
                </a>
            </div>
        </div>
    </div>

    <!-- Statistik -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-3xl font-bold text-purple-600 mb-2">
                    <?php
                    $totalDonasi = $statistics['total_donasi'];
                    if ($totalDonasi >= 1000000000) {
                        echo 'Rp ' . number_format($totalDonasi / 1000000000, 1, ',', '.') . 'M+';
                    } else if ($totalDonasi >= 1000000) {
                        echo 'Rp ' . number_format($totalDonasi / 1000000, 1, ',', '.') . 'Jt+';
                    } else {
                        echo 'Rp ' . number_format($totalDonasi, 0, ',', '.');
                    }
                    ?>
                </h3>
                <p class="text-gray-600">Total Donasi Terkumpul</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-3xl font-bold text-purple-600 mb-2">
                    <?= number_format($statistics['total_donatur'], 0, ',', '.') ?>
                </h3>
                <p class="text-gray-600">Donatur Bergabung</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-3xl font-bold text-purple-600 mb-2">
                    <?= $statistics['total_program'] ?>
                </h3>
                <p class="text-gray-600">Program Aktif</p>
            </div>
        </div>
    </div>
</section>

<!-- Program Donasi Terkini -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Program Donasi dan Sumbangan Terkini</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($programs as $program): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2"><?= esc($program['nama_program']) ?></h3>
                        <p class="text-gray-600 mb-4"><?= esc($program['deskripsi']) ?></p>
                        <div class="mb-4">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <?php
                                $percentage = ($program['terkumpul'] / $program['target']) * 100;
                                $percentage = min(100, $percentage); // Ensure it doesn't exceed 100%
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
    </div>
</section>

<!-- Cara Berdonasi -->
<section class="bg-purple-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Cara Berdonasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center">
            <!-- Item 1 -->
            <div class="text-center">
                <div
                    class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4">
                    1
                </div>
                <h3 class="font-bold mb-2">Pilih Program</h3>
                <p class="text-gray-600">Pilih program donasi yang ingin Anda bantu</p>
            </div>

            <!-- Item 2 -->
            <div class="text-center">
                <div
                    class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4">
                    2
                </div>
                <h3 class="font-bold mb-2">Isi Nominal</h3>
                <p class="text-gray-600">Tentukan jumlah donasi yang akan diberikan</p>
            </div>

            <!-- Item 3 -->
            <div class="text-center">
                <div
                    class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4">
                    3
                </div>
                <h3 class="font-bold mb-2">Konfirmasi</h3>
                <p class="text-gray-600">Donasi Anda akan diproses dan dikonfirmasi dan bisa di cek di <br />
                    <a class="underline hover:no-underline hover:text-purple-600" href="<?= base_url('cek') ?>">Cek
                        Donasi</a>
                </p>
            </div>
        </div>
    </div>
</section>