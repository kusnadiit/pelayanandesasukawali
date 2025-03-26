<?php
require 'deletdanedit.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
if ($search) {
    $data_penduduk = query("SELECT * FROM data_penduduk WHERE nik LIKE '%$search%' OR nama_panjang LIKE '%$search%' ORDER BY no_kk, 
        CASE shdk 
            WHEN 'Suami' THEN 1 
            WHEN 'Istri' THEN 2 
            WHEN 'Anak' THEN 3 
            WHEN 'Cucu' THEN 4 
            WHEN 'Orang Tua' THEN 5 
            WHEN 'Mertua' THEN 6 
            WHEN 'Famili Lain' THEN 7 
            ELSE 8 
        END");
} else {
    $data_penduduk = query("SELECT * FROM data_penduduk ORDER BY no_kk, 
        CASE shdk 
            WHEN 'Suami' THEN 1 
            WHEN 'Istri' THEN 2 
            WHEN 'Anak' THEN 3 
            WHEN 'Cucu' THEN 4 
            WHEN 'Orang Tua' THEN 5 
            WHEN 'Mertua' THEN 6 
            WHEN 'Famili Lain' THEN 7 
            ELSE 8 
        END");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        th, td {
            position: relative;
            padding: 10px; /* Menambahkan padding untuk ruang lebih */
        }
        th.sticky, td.sticky {
            position: sticky;
            z-index: 10;
            background:rgb(24, 24, 24); /* Warna latar belakang yang lebih terang */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
            border-right: 2px solid #dee2e6; /* Border yang lebih jelas */
        }
        th.sticky {
            top: 0; /* Menjaga header tetap di atas */
        }
        .action-buttons a {
            margin: 0 5px; /* Menambahkan margin antar tombol */
            padding: 5px 10px; /* Menambahkan padding untuk tombol */
            border-radius: 5px; /* Membuat sudut tombol lebih bulat */
        }
        .btn-warning {
            background-color: #ffc107; /* Warna latar belakang tombol Edit */
            border-color: #ffc107; /* Border warna tombol Edit */
        }
        .btn-danger {
            background-color: #dc3545; /* Warna latar belakang tombol Hapus */
            border-color: #dc3545; /* Border warna tombol Hapus */
        }
        .btn-warning:hover {
            background-color: #e0a800; /* Warna saat hover tombol Edit */
        }
        .btn-danger:hover {
            background-color: #c82333; /* Warna saat hover tombol Hapus */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">TABEL DATA PENDUDUK</h2>
        <div class="mb-3">
            <a href="tambah.php" class="btn btn-primary">TAMBAH DATA PENDUDUK</a>
            <a href="export.php" class="btn btn-success">EKSPOR KE EXCEL</a>
            <a href="beranda.php" class="btn btn-secondary float-end">KEMBALI</a>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <form action="import.php" method="post" enctype="multipart/form-data" class="mt-3">
                    <div class="form-group">
                        <label for="file">Impor Data Excel:</label>
                        <input type="file" class="form-control" id="file" name="file" required>
                    </div>
                    <button type="submit" name="import" class="btn btn-primary mt-2">IMPROT</button>
                </form>
            </div>
            <div class="col-md-6">
                <form action="" method="get" class="mt-3">
                    <div class="form-group">
                        <label for="search">Cari Data Penduduk:</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Masukkan NIK atau Nama">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">CARI</button>
                </form>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-body">
                <div style="overflow-x: auto;">
                    <table class="table table-bordered table-striped text-center" style="width: 100%;">
                        <thead class="table-dark">
                            <tr>
                                <th class="sticky" style="width: 50px;" style="background: black;">NO</th>
                                <th class="sticky" style="width: 100px;" style="background: black;">NO KK</th>
                                <th class="sticky" style="width: 100px;" style="background: black;">NIK</th>
                                <th style="width: 200px;">NAMA PANJANG</th>
                                <th style="width: 150px;">NAMA PANGGILAN</th>
                                <th style="width: 100px;">JENIS KELAMIN</th>
                                <th style="width: 150px;">TEMPAT LAHIR</th>
                                <th style="width: 100px;">TANGGAL LAHIR</th>
                                <th style="width: 100px;">AGAMA</th>
                                <th style="width: 100px;">PEKERJAAN</th>
                                <th style="width: 150px;">SETATUS PERKAWINAN</th>
                                <th style="width: 100px;">TANGGAL KAWIN</th>
                                <th style="width: 150px;">NAMA ISTRI</th>
                                <th style="width: 100px;">SHDK</th>
                                <th style="width: 150px;">NAMA AYAH</th>
                                <th style="width: 150px;">NAMA IBU</th>
                                <th style="width: 100px;">PENDIDIKAN</th>
                                <th style="width: 150px;">KAMPUNG/DUSUN</th>
                                <th style="width: 100px;">RT/RW</th>
                                <th style="width: 100px;">DESA</th>
                                <th style="width: 150px;">KECAMATAN</th>
                                <th style="width: 150px;">KABUPATEN</th>
                                <th style="width: 150px;">PROVINSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data -->
                             <?php $N = 1; ?>
                             <?php $previous_no_kk = ''; ?>
                             <?php foreach($data_penduduk as $row) : ?>
                             <?php if ($row["no_kk"] !== $previous_no_kk && $previous_no_kk !== ''): ?>
                                <tr>
                                    <td colspan="22" style="background: white;"></td> <!-- Baris kosong -->
                                </tr>
                             <?php endif; ?>
                            <tr style="<?= (stripos($row["nik"], $search) !== false || stripos($row["nama_panjang"], $search) !== false) ? 'background-color: #d1e7dd;' : ''; ?>">
                                <td class="sticky" style="background: white;"><?= $N; ?></td>
                                <td class="sticky" style="background: white;"><?= $row["no_kk"]; ?></td>
                                <td class="sticky" style="background: white;"><?= $row["nik"]; ?></td>
                                <td><?= $row["nama_panjang"]; ?></td>
                                <td><?= $row["nama_panggilan"]; ?></td>
                                <td><?= $row["jenis_kelamin"]; ?></td>
                                <td><?= $row["tempat_lahir"]; ?></td>
                                <td><?= $row["tanggal_lahir"]; ?></td>
                                <td><?= $row["agama"]; ?></td>
                                <td><?= $row["pekerjaan"]; ?></td>
                                <td><?= $row["setatus_perkawinan"]; ?></td>
                                <td><?= $row["tanggal_kawin"]; ?></td>
                                <td><?= $row["nama_istri"]; ?></td>
                                <td><?= $row["shdk"]; ?></td>
                                <td><?= $row["nama_ayah"]; ?></td>
                                <td><?= $row["nama_ibu"]; ?></td>
                                <td><?= $row["pendidikan"]; ?></td>
                                <td><?= $row["kp_dusun"]; ?></td>
                                <td><?= $row["rt_rw"]; ?></td>
                                <td><?= $row["desa"]; ?></td>
                                <td><?= $row["kecamatan"]; ?></td>
                                <td><?= $row["kabupaten"]; ?></td>
                                <td><?= $row["provinsi"]; ?></td>
                                <td class="action-buttons">
                                    <a href="edit.php?nik=<?= $row['nik']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapus.php?nik=<?= $row['nik']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php $N++; ?>
                            <?php $previous_no_kk = $row["no_kk"]; ?>
                            <?php endforeach; ?>
                            <!-- Tambahkan data lainnya di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>