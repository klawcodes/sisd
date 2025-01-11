<head>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="min-h-screen bg-white-700 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-lg drop-shadow-2xl">
            <!-- Header -->
            <div class="text-center flex flex-col items-center justify-center p-6 sm:p-8">
                <div class="flex-shrink-0 flex items-center space-x-2 mb-5">
                    <svg class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span class="text-gray-800 font-bold text-xl">DonasiKita</span>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Selamat Datang Kembali</h1>
                <p class="text-gray-600">Sistem Informasi Sumbangan RT 003</p>
            </div>

            <!-- Login Form -->
            <form class="p-6 sm:p-8 pt-0" action="<?= base_url('login') ?>" method="POST">
            <?= csrf_field() ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <!-- Username/Email Field -->
                <div class="mb-4">
                    <label for="inputUsername" class="block text-sm font-medium text-gray-700 mb-1">
                        Username / Email
                    </label>
                    <input type="text" id="inputUsername" name="username"
                        value="<?= session()->getFlashdata('username') ?? '' ?>"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                        placeholder="Masukkan username atau email">
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <label for="inputPassword" class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>
                    <input type="password" id="inputPassword" name="password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                        placeholder="Masukkan password">
                    <div class="flex justify-end mt-2">
                        <a href="#" class="text-sm text-purple-600 hover:text-purple-800">Lupa password?</a>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        Ingat saya
                    </label>
                </div>

                <!-- Login Button -->
                <button type="submit" name="login"
                    class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                    Masuk
                </button>
            </form>



            <!-- Footer -->
            <div class="text-center pb-6 sm:pb-8">
                <p class="text-sm text-gray-600">
                    Butuh bantuan? Hubungi
                    <a href="#" class="text-purple-600 hover:text-purple-800">Admin RT</a>
                </p>
            </div>
        </div>
    </div>