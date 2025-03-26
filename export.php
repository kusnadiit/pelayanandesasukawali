<?php
require 'deletdanedit.php';

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_penduduk.xls");
header("Pragma: no-cache");
header("Expires: 0");

$data_penduduk = query("SELECT * FROM data_penduduk");

echo "<table border='1'>
<tr>
    <th>NO KK</th>
    <th>NIK</th>
    <th>NAMA PANJANG</th>
    <th>NAMA PANGGILAN</th>
    <th>JENIS KELAMIN</th>
    <th>TEMPAT LAHIR</th>
    <th>TANGGAL LAHIR</th>
    <th>AGAMA</th>
    <th>PEKERJAAN</th>
    <th>SETATUS PERKAWINAN</th>
    <th>TANGGAL KAWIN</th>
    <th>NAMA ISTRI</th>
    <th>SHDK</th>
    <th>NAMA AYAH</th>
    <th>NAMA IBU</th>
    <th>PENDIDIKAN</th>
    <th>KAMPUNG/DUSUN</th>
    <th>RT/RW</th>
    <th>DESA</th>
    <th>KECAMATAN</th>
    <th>KABUPATEN</th>
    <th>PROVINSI</th>
</tr>";

foreach ($data_penduduk as $row) {
    echo "<tr>
        <td>{$row['no_kk']}</td>
        <td>{$row['nik']}</td>
        <td>{$row['nama_panjang']}</td>
        <td>{$row['nama_panggilan']}</td>
        <td>{$row['jenis_kelamin']}</td>
        <td>{$row['tempat_lahir']}</td>
        <td>{$row['tanggal_lahir']}</td>
        <td>{$row['agama']}</td>
        <td>{$row['pekerjaan']}</td>
        <td>{$row['setatus_perkawinan']}</td>
        <td>{$row['tanggal_kawin']}</td>
        <td>{$row['nama_istri']}</td>
        <td>{$row['shdk']}</td>
        <td>{$row['nama_ayah']}</td>
        <td>{$row['nama_ibu']}</td>
        <td>{$row['pendidikan']}</td>
        <td>{$row['kp_dusun']}</td>
        <td>{$row['rt_rw']}</td>
        <td>{$row['desa']}</td>
        <td>{$row['kecamatan']}</td>
        <td>{$row['kabupaten']}</td>
        <td>{$row['provinsi']}</td>
    </tr>";
}

echo "</table>";
?>
