<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-white-700 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-lg drop-shadow-2xl p-8">
            <!-- Welcome Message -->
            <?php if (session()->getFlashdata('welcome')) : ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <?= session()->getFlashdata('welcome') ?>
                </div>
            <?php endif; ?>

            <h1 class="text-2xl font-bold text-gray-900 mb-4">Dashboard Member</h1>
            
            <!-- User Info -->
            <div class="mb-6">
                <p class="text-gray-600">Logged in as: <span class="font-semibold"><?= session()->get('username') ?></span></p>
            </div>

            <!-- Logout Button -->
            <form action="<?= base_url('login/logout') ?>" method="post">
                <button type="submit" 
                    class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>