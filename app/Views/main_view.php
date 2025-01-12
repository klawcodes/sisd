<!-- Hero Section -->
<section class="relative bg-purple-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Sistem Informasi Sumbangan RT 003</h1>
            <p class="text-xl text-gray-600 mb-8">Kelurahan Ciganea, Kecamatan Los Angeles</p>
            <a href="<?= base_url('donate') ?>" class="inline-block bg-purple-600 text-white px-8 py-3 rounded-full font-medium hover:bg-purple-700 transition duration-150 ease-in-out">Donasi Sekarang</a>
        </div>
        
        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-3xl font-bold text-purple-600 mb-2">Rp 1.5M+</h3>
                <p class="text-gray-600">Total Donasi Terkumpul</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-3xl font-bold text-purple-600 mb-2">1,234</h3>
                <p class="text-gray-600">Donatur Bergabung</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <h3 class="text-3xl font-bold text-purple-600 mb-2">15</h3>
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
            <!-- Program 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Program 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Sumbangan Kebersihan Bulanan</h3>
                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-purple-600 h-2.5 rounded-full" style="width: 75%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Terkumpul: Rp75.000.000</span>
                            <span>Target: Rp100.000.000</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Sisa 15 hari lagi</p>
                    <a href="#" class="block text-center bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700">Donasi Sekarang</a>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Program 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Pembangunan Masjid Desa</h3>
                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-purple-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Terkumpul: Rp90.000.000</span>
                            <span>Target: Rp200.000.000</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Sisa 25 hari lagi</p>
                    <a href="#" class="block text-center bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700">Donasi Sekarang</a>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="/api/placeholder/400/200" alt="Program 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Bantuan Kematian</h3>
                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-purple-600 h-2.5 rounded-full" style="width: 90%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Terkumpul: Rp180.000.000</span>
                            <span>Target: Rp200.000.000</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Sisa 5 hari lagi</p>
                    <a href="#" class="block text-center bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700">Donasi Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cara Berdonasi -->
<section class="bg-purple-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Cara Berdonasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4">1</div>
                <h3 class="font-bold mb-2">Pilih Program</h3>
                <p class="text-gray-600">Pilih program donasi yang ingin Anda bantu</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4">2</div>
                <h3 class="font-bold mb-2">Isi Nominal</h3>
                <p class="text-gray-600">Tentukan jumlah donasi yang akan diberikan</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4">3</div>
                <h3 class="font-bold mb-2">Pembayaran</h3>
                <p class="text-gray-600">Pilih metode pembayaran yang tersedia</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4">4</div>
                <h3 class="font-bold mb-2">Konfirmasi</h3>
                <p class="text-gray-600">Donasi Anda akan diproses dan dikonfirmasi</p>
            </div>
        </div>
    </div>
</section>