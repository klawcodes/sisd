<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8 text-center">
        <div class="mb-4">
            <svg class="mx-auto h-12 w-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Donasi Berhasil!</h2>
        
        <p class="text-gray-600 mb-6">Terima kasih atas donasi Anda. Berikut adalah nomor donasi Anda:</p>
        
        <div class="bg-gray-100 p-4 rounded-lg mb-6">
            <p class="text-lg font-mono font-bold text-gray-800" id="noDonasi"><?= $no_donasi ?></p>
            <button onclick="copyNoDonasi()" class="mt-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Salin Nomor
            </button>
        </div>

        <a href="<?= base_url('donate') ?>" class="text-indigo-600 hover:text-indigo-800">
            Kembali ke Form Donasi
        </a>
    </div>
</div>

<script>
function copyNoDonasi() {
    // Get the text
    var noDonasi = document.getElementById('noDonasi').innerText;
    
    // Create a temporary input element
    var tempInput = document.createElement('input');
    tempInput.value = noDonasi;
    document.body.appendChild(tempInput);
    
    // Select the text
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices
    
    // Copy the text
    document.execCommand('copy');
    
    // Remove the temporary input
    document.body.removeChild(tempInput);
    
    // Optional: provide feedback to user
    alert('Nomor donasi berhasil disalin!');
}
</script>
</body>