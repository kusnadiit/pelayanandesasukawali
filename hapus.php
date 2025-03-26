<?php
require 'deletdanedit.php';

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    // Query untuk menghapus data
    $query = "DELETE FROM data_penduduk WHERE nik = '$nik'";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Redirect kembali ke halaman tabel data penduduk
header("Location: tabel_datapenduduk.php");
exit;
?>
