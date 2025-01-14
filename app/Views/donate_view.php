<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Donasi</title>
</head>

<body>
    <div class="min-h-screen bg-gray-50 flex flex-col items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
            <div class="flex flex-col items-center">
                <div class="flex-shrink-0 flex items-center space-x-2 mb-5">
                    <svg class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span class="text-gray-800 font-bold text-xl">DonasiKita</span>
                </div>
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-5">Form Donasi RT 003</h2>
            </div>

            <div class="flex justify-between items-center mb-6">
                <a href="<?= base_url('/') ?>" class="hover:underline"><- Kembali</a>
                        <a href="<?= base_url('cek') ?>" class="hover:underline">Cek Donasi -></a>
            </div>

            <form action="<?= base_url('donate/add') ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                <?= csrf_field() ?>

                <!-- Nama -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Program Donasi -->
                <div>
                    <label for="program" class="block text-sm font-medium text-gray-700">Program Donasi</label>
                    <select id="program" name="program" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Pilih program donasi</option>
                        <?php foreach ($programs as $program): ?>
                            <option value="<?= $program->id_program ?>"><?= $program->nama_program ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Nominal -->
                <div>
                    <label for="nominal" class="block text-sm font-medium text-gray-700">Nominal</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">Rp</span>
                        </div>
                        <input type="number" id="nominal" name="nominal" required
                            class="block w-full pl-12 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Kirim Donasi
                    </button>
                </div>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

    <?php if (session()->has('swal_icon')): ?>
        <script>
            Swal.fire({
                icon: '<?= session()->getFlashdata('swal_icon') ?>',
                title: '<?= session()->getFlashdata('swal_title') ?>',
                html: '<?= session()->getFlashdata('swal_text') ?>',
            });
        </script>
    <?php endif; ?>
</body>