<?php
require 'deletdanedit.php';
require 'vendor/autoload.php'; // Pastikan Anda sudah menginstal PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['import'])) {
    $file = $_FILES['file']['tmp_name'];

    // Load file Excel
    $spreadsheet = IOFactory::load($file);
    $data = $spreadsheet->getActiveSheet()->toArray();

    // Loop melalui data dan simpan ke database
    foreach ($data as $row) {
        // Asumsikan kolom sesuai dengan urutan di database
        $no_kk = $row[0];
        $nik = $row[1];
        $nama_panjang = $row[2];
        $nama_panggilan = $row[3];
        $jenis_kelamin = $row[4];
        $tempat_lahir = $row[5];
        $tanggal_lahir = $row[6];
        $agama = $row[7];
        $pekerjaan = $row[8];
        $setatus_perkawinan = $row[9];
        $tanggal_kawin = $row[10];
        $nama_istri = $row[11];
        $shdk = $row[12];
        $nama_ayah = $row[13];
        $nama_ibu = $row[14];
        $pendidikan = $row[15];
        $kp_dusun = $row[16];
        $rt_rw = $row[17];
        $desa = $row[18];
        $kecamatan = $row[19];
        $kabupaten = $row[20];
        $provinsi = $row[21];

        // Query untuk memasukkan data
        $query = "INSERT INTO data_penduduk 
        (no_kk, nik, nama_panjang, nama_panggilan, jenis_kelamin, 
        tempat_lahir, tanggal_lahir, agama, pekerjaan, setatus_perkawinan, 
        tanggal_kawin, nama_istri, shdk, nama_ayah, nama_ibu, pendidikan, 
        kp_dusun, rt_rw, desa, kecamatan, kabupaten, provinsi) 
        VALUES
        ('$no_kk', '$nik', '$nama_panjang', '$nama_panggilan', '$jenis_kelamin', 
        '$tempat_lahir', '$tanggal_lahir', '$agama', '$pekerjaan', '$setatus_perkawinan', 
        '$tanggal_kawin', '$nama_istri', '$shdk', '$nama_ayah', '$nama_ibu', '$pendidikan', 
        '$kp_dusun', '$rt_rw', '$desa', '$kecamatan', '$kabupaten', '$provinsi')";

        mysqli_query($conn, $query);
    }

    echo "Data berhasil diimpor.";
} else {
    echo "Tidak ada file yang diunggah.";
}
?> 