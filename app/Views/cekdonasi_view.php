<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Cek Donasi</title>
</head>

<body>
    <div class="min-h-screen bg-gray-50 flex flex-col items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
            <!-- Header section -->
            <div class="flex flex-col items-center">
                <div class="flex-shrink-0 flex items-center space-x-2 mb-5">
                    <svg class="h-8 w-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span class="text-gray-800 font-bold text-xl">DonasiKita</span>
                </div>
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-5">Cek Status Donasi</h2>
            </div>

            <a href="<?= base_url('/') ?>" class="hover:underline mb-6 inline-block"><- Kembali</a>

                    <!-- Form section -->
                    <div class="flex space-x-4">
                        <div class="flex-1">
                            <label for="no_donasi" class="block text-sm font-medium text-gray-700 mb-2">
                                Nomor Donasi
                            </label>
                            <textarea id="no_donasi" name="no_donasi" rows="3"
                                class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                placeholder="Masukkan nomor donasi Anda"></textarea>
                        </div>
                        <div class="flex items-end">
                            <button id="btnCek" type="button"
                                class="h-[45px] px-6 py-2.5 bg-purple-600 text-white font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors">
                                Cek
                            </button>
                        </div>
                    </div>

                    <!-- Hasil pencarian -->
                    <div id="hasil_pencarian" class="mt-6 hidden">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="space-y-3">
                                <div>
                                    <span class="text-sm text-gray-500">Nomor Donasi:</span>
                                    <p class="font-medium" id="result_no_donasi"></p>
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">Nama Donatur:</span>
                                    <p class="font-medium" id="result_nm_donatur"></p>
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">Tanggal Donasi:</span>
                                    <p class="font-medium" id="result_tgl_donasi"></p>
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">Program:</span>
                                    <p class="font-medium" id="result_nm_program"></p>
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">Nominal:</span>
                                    <p class="font-medium" id="result_jmlh_nominal"></p>
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">Status:</span>
                                    <p class="font-medium" id="result_status"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pesan error -->
                    <div id="error_message" class="mt-6 hidden">
                        <div class="bg-red-50 text-red-600 rounded-lg p-4">
                        </div>
                    </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#btnCek').click(function () {
                const no_donasi = $('#no_donasi').val().trim();

                // Reset tampilan
                $('#hasil_pencarian').addClass('hidden');
                $('#error_message').addClass('hidden');

                if (!no_donasi) {
                    $('#error_message').removeClass('hidden')
                        .find('div').text('Silakan masukkan nomor donasi');
                    return;
                }

                // Tampilkan loading state
                $(this).prop('disabled', true).text('Mencari...');

                $.ajax({
                    url: '<?= base_url('cek/check') ?>',
                    type: 'POST',
                    data: { no_donasi: no_donasi },
                    dataType: 'json',
                    beforeSend: function () {
                        console.log('Sending request...');
                    },
                    success: function (response) {
                        console.log('Response received:', response);
                        if (response.success) {
                            $('#hasil_pencarian').removeClass('hidden');
                            $('#result_no_donasi').text(response.data.no_donasi);
                            $('#result_nm_donatur').text(response.data.nm_donatur);
                            $('#result_tgl_donasi').text(response.data.tgl_donasi);
                            $('#result_nm_program').text(response.data.nm_program);
                            $('#result_jmlh_nominal').text('Rp ' + response.data.jmlh_nominal);
                            $('#result_status').text(response.data.status);
                        } else {
                            $('#error_message').removeClass('hidden')
                                .find('div').text(response.message || 'Data tidak ditemukan');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Status:', status);
                        console.error('Error:', error);
                        console.error('Response:', xhr.responseText);

                        $('#error_message').removeClass('hidden')
                            .find('div').text('Terjadi kesalahan: ' + error);
                    },
                    complete: function () {
                        $('#btnCek').prop('disabled', false).text('Cek');
                    }
                });
            });
        });
    </script>
</body>

</html>