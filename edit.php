<?php
require 'deletdanedit.php';

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];
    $data = query("SELECT * FROM data_penduduk WHERE nik = '$nik'")[0];

    if (isset($_POST["submit"])) {
        // Ambil data dari form
        $no_kk = $_POST["no_kk"];
        $nama_panjang = $_POST["nama_panjang"];
        $nama_panggilan = $_POST["nama_panggilan"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $tempat_lahir = $_POST["tempat_lahir"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $agama = $_POST["agama"];
        $pekerjaan = $_POST["pekerjaan"];
        $setatus_perkawinan = $_POST["setatus_perkawinan"];
        $tanggal_kawin = $_POST["tanggal_kawin"];
        $nama_istri = $_POST["nama_istri"];
        $shdk = $_POST["shdk"];
        $nama_ayah = $_POST["nama_ayah"];
        $nama_ibu = $_POST["nama_ibu"];
        $pendidikan = $_POST["pendidikan"];
        $kp_dusun = $_POST["kp_dusun"];
        $rt_rw = $_POST["rt_rw"];
        $desa = $_POST["desa"];
        $kecamatan = $_POST["kecamatan"];
        $kabupaten = $_POST["kabupaten"];
        $provinsi = $_POST["provinsi"];

        // Query untuk memperbarui data
        $query = "UPDATE data_penduduk SET 
            no_kk = '$no_kk', 
            nama_panjang = '$nama_panjang', 
            nama_panggilan = '$nama_panggilan', 
            jenis_kelamin = '$jenis_kelamin', 
            tempat_lahir = '$tempat_lahir', 
            tanggal_lahir = '$tanggal_lahir', 
            agama = '$agama', 
            pekerjaan = '$pekerjaan', 
            setatus_perkawinan = '$setatus_perkawinan', 
            tanggal_kawin = '$tanggal_kawin', 
            nama_istri = '$nama_istri', 
            shdk = '$shdk', 
            nama_ayah = '$nama_ayah', 
            nama_ibu = '$nama_ibu', 
            pendidikan = '$pendidikan', 
            kp_dusun = '$kp_dusun', 
            rt_rw = '$rt_rw', 
            desa = '$desa', 
            kecamatan = '$kecamatan', 
            kabupaten = '$kabupaten', 
            provinsi = '$provinsi' 
            WHERE nik = '$nik'";

        // Eksekusi query dan cek apakah berhasil
        if (mysqli_query($conn, $query)) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "NIK tidak ditemukan.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penduduk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Data Penduduk</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="no_kk">NO KK :</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" value="<?= $data['no_kk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_panjang">NAMA PANJANG :</label>
                <input type="text" class="form-control" id="nama_panjang" name="nama_panjang" value="<?= $data['nama_panjang']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_panggilan">NAMA PANGGILAN:</label>
                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" value="<?= $data['nama_panggilan']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">JENIS KELAMIN :</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">TEMPAT LAHIR:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">TANGGAL LAHIR:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>" required>
            </div>
            <div class="form-group">
                <label for="agama">AGAMA:</label>
                <input type="text" class="form-control" id="agama" name="agama" value="<?= $data['agama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan">PEKERJAAN:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $data['pekerjaan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="setatus_perkawinan">STATUS PERKAWINAN:</label>
                <select class="form-control" id="setatus_perkawinan" name="setatus_perkawinan" required>
                    <option value="Belum Menikah" <?= $data['setatus_perkawinan'] == 'Belum Menikah' ? 'selected' : ''; ?>>Belum Menikah</option>
                    <option value="Menikah" <?= $data['setatus_perkawinan'] == 'Menikah' ? 'selected' : ''; ?>>Menikah</option>
                    <option value="Cerai" <?= $data['setatus_perkawinan'] == 'Cerai' ? 'selected' : ''; ?>>Cerai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_kawin">TANGGAL KAWIN:</label>
                <input type="date" class="form-control" id="tanggal_kawin" name="tanggal_kawin" value="<?= $data['tanggal_kawin']; ?>">
            </div>
            <div class="form-group">
                <label for="nama_istri">NAMA ISTRI:</label>
                <input type="text" class="form-control" id="nama_istri" name="nama_istri" value="<?= $data['nama_istri']; ?>">
            </div>
            <div class="form-group">
                <label for="shdk">SHDK:</label>
                <input type="text" class="form-control" id="shdk" name="shdk" value="<?= $data['shdk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_ayah">NAMA AYAH:</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $data['nama_ayah']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_ibu">NAMA IBU:</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $data['nama_ibu']; ?>" required>
            </div>
            <div class="form-group">
                <label for="pendidikan">PENDIDIKAN:</label>
                <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= $data['pendidikan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kp_dusun">KAMPUNG/DUSUN:</label>
                <input type="text" class="form-control" id="kp_dusun" name="kp_dusun" value="<?= $data['kp_dusun']; ?>" required>
            </div>
            <div class="form-group">
                <label for="rt_rw">RT/RW:</label>
                <input type="text" class="form-control" id="rt_rw" name="rt_rw" value="<?= $data['rt_rw']; ?>" required>
            </div>
            <div class="form-group">
                <label for="desa">DESA:</label>
                <input type="text" class="form-control" id="desa" name="desa" value="<?= $data['desa']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kecamatan">KECAMATAN:</label>
                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $data['kecamatan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kabupaten">KABUPATEN:</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $data['kabupaten']; ?>" required>
            </div>
            <div class="form-group">
                <label for="provinsi">PROVINSI:</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $data['provinsi']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
