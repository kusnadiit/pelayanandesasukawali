<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembuatan Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .button-container {
            margin-bottom: 15px;
        }
        .button-container .btn {
            width: 100%; /* Membuat tombol memenuhi lebar kontainer */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Pembuatan Surat</h1>
        
        <!-- Tombol Kembali -->
        <div class="mb-3">
            <a href="beranda.php" class="btn btn-secondary">Kembali</a> <!-- Ganti 'index.php' dengan URL yang sesuai -->
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="button-container">
                    <button class="btn btn-primary">Surat Keterangan</button>
                    <ul class="list-group mt-2">
                        <li class="list-group-item"><a href="">Surat Keterangan Domisili</a></li>
                        <li class="list-group-item"><a href="">Surat Keterangan Usaha</a></li>
                        <li class="list-group-item"><a href="">Surat Keterangan Tidak Mampu (SKTM)</a></li>
                        <li class="list-group-item"><a href="">Surat Keterangan Kelahiran</a></li>
                        <li class="list-group-item"><a href="">Surat Keterangan Kematian</a></li>
                        <li class="list-group-item"><a href="">Surat Keterangan Belum Menikah</a></li>
                        <li class="list-group-item"><a href="">Surat Keterangan Ahli Waris</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="button-container">
                    <button class="btn btn-primary">Surat Pengantar</button>
                    <ul class="list-group mt-2">
                        <li class="list-group-item"><a href="">Surat Pengantar SKCK</a></li>
                        <li class="list-group-item"><a href="">Surat Pengantar Pembuatan KTP/KK</a></li>
                        <li class="list-group-item"><a href="">Surat Pengantar Pernikahan (N1, N2, N4)</a></li>
                        <li class="list-group-item"><a href="">Surat Pengantar Pindah Penduduk</a></li>
                        <li class="list-group-item"><a href="">Surat Pengantar IMB</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="button-container">
                    <button class="btn btn-primary">Surat Rekomendasi dan Izin</button>
                    <ul class="list-group mt-2">
                        <li class="list-group-item"><a href="">Surat Rekomendasi Beasiswa</a></li>
                        <li class="list-group-item"><a href="">Surat Rekomendasi Bantuan Sosial</a></li>
                        <li class="list-group-item"><a href="">Surat Izin Keramaian</a></li>
                        <li class="list-group-item"><a href="">Surat Izin Penggunaan Tanah</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="button-container">
                    <button class="btn btn-primary">Surat Perjanjian dan Pernyataan</button>
                    <ul class="list-group mt-2">
                        <li class="list-group-item"><a href="">Surat Perjanjian Jual Beli Tanah</a></li>
                        <li class="list-group-item"><a href="">Surat Pernyataan Hibah Tanah</a></li>
                        <li class="list-group-item"><a href="">Surat Pernyataan Kesanggupan Membayar Pajak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Fungsi toggle dihapus karena tidak diperlukan lagi
    </script>
</body>
</html>
