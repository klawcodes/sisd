<!DOCTYPE html>
<html>

<head>
    <title>Cek Donasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white min-h-screen py-10 ">
    <!-- Container untuk centering -->
    <div class="container mx-auto px-4 max-w-6xl ">
        <div class="bg-white rounded-lg drop-shadow-2xl">
            <div class="p-4 border-b border-gray-200 items-center justify-center flex flex-col">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink-0 flex items-center space-x-2 mb-5">
                        <svg class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="text-gray-800 font-bold text-xl">DonasiKita</span>
                    </div>
                    <h2 class="text-2xl font-bold text-center text-gray-800 mb-5">Cek Donasi</h2>
                </div>
                <a href="<?= base_url('/') ?>" class="hover:underline">Kembali</a>

                <!-- Search Bar -->
                <div class="mt-4">
                    <input type="text" id="searchInput"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Masukkan No Donasi...">
                </div>
            </div>

            <div class="p-4 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="px-3 py-2 lg:px-4 lg:py-3 text-left text-xs lg:text-sm font-medium text-gray-500 uppercase tracking-wider">
                                Tanggal
                            </th>
                            <th
                                class="px-3 py-2 lg:px-4 lg:py-3 text-left text-xs lg:text-sm font-medium text-gray-500 uppercase tracking-wider">
                                No Donasi
                            </th>
                            <th
                                class="px-3 py-2 lg:px-4 lg:py-3 text-left text-xs lg:text-sm font-medium text-gray-500 uppercase tracking-wider">
                                Nama Donatur
                            </th>
                            <th
                                class="px-3 py-2 lg:px-4 lg:py-3 text-left text-xs lg:text-sm font-medium text-gray-500 uppercase tracking-wider">
                                Program
                            </th>
                            <th
                                class="px-3 py-2 lg:px-4 lg:py-3 text-left text-xs lg:text-sm font-medium text-gray-500 uppercase tracking-wider">
                                Jumlah
                            </th>
                            <th
                                class="px-3 py-2 lg:px-4 lg:py-3 text-left text-xs lg:text-sm font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="bg-white divide-y divide-gray-200">
                        <?php foreach ($donasi as $row): ?>
                            <tr class="donasi-row">
                                <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                    <?= date('d M Y', strtotime($row['tgl_donasi'])) ?>
                                </td>
                                <td
                                    class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900 no-donasi">
                                    <?= esc($row['no_donasi']) ?>
                                </td>
                                <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                    <?= esc($row['nm_donatur']) ?>
                                </td>
                                <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                    <?= esc($row['nama_program']) ?>
                                </td>
                                <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                    Rp <?= number_format($row['jmlh_nominal'], 0, ',', '.') ?>
                                </td>
                                <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm">
                                    <div class="flex items-center gap-2">
                                        <?php if ($row['status'] == 1): ?>
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Approve
                                            </span>
                                        <?php else: ?>
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                Not Approve
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="p-4 border-t border-gray-200">
                    <?php
                    $total_pages = ceil($pager['total_records'] / $pager['per_page']);
                    $current_page = $pager['current_page'];
                    ?>

                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            Showing <?= (($current_page - 1) * 5) + 1 ?> to
                            <?= min($current_page * 5, $pager['total_records']) ?> of
                            <?= $pager['total_records'] ?> entries
                        </div>

                        <div class="flex space-x-1">
                            <?php if ($current_page > 1): ?>
                                <a href="<?= base_url('cek?page=' . ($current_page - 1)) ?>"
                                    class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">
                                    Previous
                                </a>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <a href="<?= base_url('cek?page=' . $i) ?>"
                                    class="px-3 py-1 text-sm <?= $i == $current_page ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' ?> rounded-md">
                                    <?= $i ?>
                                </a>
                            <?php endfor; ?>

                            <?php if ($current_page < $total_pages): ?>
                                <a href="<?= base_url('cekdonasi?page=' . ($current_page + 1)) ?>"
                                    class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">
                                    Next
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#searchInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $(".donasi-row").filter(function () {
                    var noDonasi = $(this).find(".no-donasi").text().toLowerCase();
                    $(this).toggle(noDonasi.indexOf(value) > -1);
                });
            });
        });
    </script>
    <script>
$(document).ready(function() {
    var typingTimer;
    var doneTypingInterval = 500; // waktu tunggu setelah user selesai mengetik (dalam ms)

    $("#searchInput").on("keyup", function() {
        clearTimeout(typingTimer);
        var searchValue = $(this).val();
        
        typingTimer = setTimeout(function() {
            if(searchValue) {
                $.ajax({
                    url: '<?= base_url('cekdonasi/search') ?>',
                    method: 'GET',
                    data: { no_donasi: searchValue },
                    success: function(response) {
                        // Kosongkan tbody
                        $('#tableBody').empty();
                        
                        // Tambahkan data hasil pencarian
                        response.forEach(function(row) {
                            $('#tableBody').append(`
                                <tr class="donasi-row">
                                    <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                        ${formatDate(row.tgl_donasi)}
                                    </td>
                                    <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900 no-donasi">
                                        ${row.no_donasi}
                                    </td>
                                    <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                        ${row.nm_donatur}
                                    </td>
                                    <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                        ${row.nama_program}
                                    </td>
                                    <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm text-gray-900">
                                        Rp ${formatNumber(row.jmlh_nominal)}
                                    </td>
                                    <td class="px-3 py-2 lg:px-4 lg:py-3 whitespace-nowrap text-xs lg:text-sm">
                                        <div class="flex items-center gap-2">
                                            ${row.status == 1 ? 
                                                '<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approve</span>' : 
                                                '<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Not Approve</span>'
                                            }
                                        </div>
                                    </td>
                                </tr>
                            `);
                        });
                        
                        // Sembunyikan pagination saat pencarian
                        $('.p-4.border-t.border-gray-200').hide();
                    }
                });
            } else {
                // Jika search kosong, reload halaman
                window.location.reload();
            }
        }, doneTypingInterval);
    });
    
    // Helper function untuk format tanggal
    function formatDate(dateStr) {
        const date = new Date(dateStr);
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        return `${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
    }
    
    // Helper function untuk format angka
    function formatNumber(num) {
        return new Intl.NumberFormat('id-ID').format(num);
    }
});
</script>
</body>

</html>