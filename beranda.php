<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-image: url('img/bacground.jpg'); /* Pastikan path gambar benar */
            background-size: cover; /* Mengatur gambar agar menutupi seluruh area */
            background-position: center; /* Memusatkan gambar */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            position: relative; /* Menambahkan posisi relatif untuk efek gradien */
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /*background: rgba(0, 0, 0, 0.5); /* Efek gradien hitam transparan */
            z-index: 1; /* Pastikan efek gradien berada di atas gambar */
        }
        .container {
            margin-top: 70px;
            background-color: rgba(255, 255, 255, 0.9); /* Menambahkan latar belakang putih transparan untuk konten */
            border-radius: 20px; /* Menambahkan sudut melengkung pada kontainer */
            padding: 30px; /* Menambahkan padding untuk konten */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5); /* Menambahkan bayangan pada kontainer */
            position: relative; /* Menambahkan posisi relatif untuk kontainer */
            z-index: 2; /* Pastikan kontainer berada di atas efek gradien */
        }
        .header-title {
            margin-bottom: 40px; /* Mengurangi jarak bawah judul */
            font-weight: bold;
            color: #343a40;
            font-size: 2.8rem; /* Meningkatkan ukuran font judul */
            text-align: center; /* Memusatkan teks judul */
        }
        .btn-custom {
            width: 100%;
            height: 100px; /* Meningkatkan tinggi tombol */
            font-size: 2rem; /* Meningkatkan ukuran font tombol */
            margin-bottom: 20px; /* Mengurangi jarak bawah tombol */
            transition: transform 0.3s, background-color 0.3s;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Menambahkan bayangan pada tombol */
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-info {
            background-color: #17a2b8;
            border: none;
        }
        .btn-info:hover {
            background-color: #138496;
        }
        .btn-warning {
            background-color: #ffc107;
            border: none;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .card {
            border: none;
            border-radius: 20px;
            background-color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .icon {
            font-size: 4.5rem; /* Meningkatkan ukuran ikon */
            margin-bottom: 15px; /* Mengurangi jarak bawah ikon */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center header-title">Selamat Datang di Sistem Pelayanan Desa Sukawali</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="pembuatan_surat.php" class="btn btn-primary btn-custom">
                            <i class="fas fa-file-alt icon"></i> BUAT SURAT
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="tambah.php" class="btn btn-success btn-custom">
                            <i class="fas fa-user-plus icon"></i> TAMBAH DATA KEPENDUDUKAN
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="tabel_datapenduduk.php" class="btn btn-info btn-custom">
                            <i class="fas fa-file-invoice icon"></i> DATA KEPENDUDUKAN
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <a href="laporan.php" class="btn btn-warning btn-custom">
                            <i class="fas fa-chart-line icon"></i> LAPORAN
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>
</html>
