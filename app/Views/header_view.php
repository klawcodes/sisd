<!doctype html>
<html lang="en">
  <head>
    <title>DonasiKita - Sistem Informasi Sumbangan dan Donasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="sticky top-0 z-50 bg-white bg-opacity-80 backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo dan Brand -->
            <div class="flex-shrink-0 flex items-center space-x-2">
                <svg class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span class="text-gray-800 font-bold text-xl">DonasiKita</span>
            </div>

            <!-- Navigation Links - Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="<?= base_url('/') ?>" class="text-gray-600 hover:text-purple-600 px-3 py-2 text-sm font-medium">Beranda</a>
                <a href="<?= base_url('program') ?>" class="text-gray-600 hover:text-purple-600 px-3 py-2 text-sm font-medium">Program Donasi</a>
                <a href="<?= base_url('about') ?>" class="text-gray-600 hover:text-purple-600 px-3 py-2 text-sm font-medium">Tentang Kami</a>
                <a href="<?= base_url('contact') ?>" class="text-gray-600 hover:text-purple-600 px-3 py-2 text-sm font-medium">Kontak</a>
            </div>

            <!-- Action Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="<?= base_url('login') ?>" class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-purple-700 transition duration-150 ease-in-out">
                    Login
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button onclick="toggleMobileMenu()" class="text-gray-600 hover:text-purple-600 focus:outline-none">
                    <svg class="h-6 w-6" id="menuIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden hidden" id="mobileMenu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="<?= base_url('/') ?>" class="text-gray-600 hover:text-purple-600 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Beranda</a>
            <a href="<?= base_url('program') ?>" class="text-gray-600 hover:text-purple-600 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Program Donasi</a>
            <a href="<?= base_url('about') ?>" class="text-gray-600 hover:text-purple-600 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Tentang Kami</a>
            <a href="<?= base_url('contact') ?>" class="text-gray-600 hover:text-purple-600 hover:bg-gray-50 block px-3 py-2 rounded-md text-base font-medium">Kontak</a>
            <a href="<?= base_url('login') ?>" class="w-full bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-purple-700 mt-4 text-center block">
                Login
            </a>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
}
</script>