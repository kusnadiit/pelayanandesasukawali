<?php
// Koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "tabel_datapenduduk");

if (isset($_POST["submit"])) {
    // Ambil data dari tiap elemen dalam form dengan nilai default
    $no_kk = $_POST["no_kk"] ?? 'N/A'; // Ganti 'N/A' dengan nilai default yang diinginkan
    $nik = $_POST["nik"] ?? 'N/A'; // Ganti 'N/A' dengan nilai default yang diinginkan
    $nama_panjang = $_POST["nama_panjang"] ?? 'N/A'; // Ganti 'N/A' dengan nilai default yang diinginkan
    $nama_panggilan = $_POST["nama_panggilan"] ?? 'N/A'; // Ganti 'N/A' dengan nilai default yang diinginkan
    $jenis_kelamin = $_POST["jenis_kelamin"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $tempat_lahir = $_POST["tempat_lahir"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $tanggal_lahir = $_POST["tanggal_lahir"] ?? '0000-00-00'; // Ganti dengan nilai default
    $agama = $_POST["agama"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $pekerjaan = $_POST["pekerjaan"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $setatus_perkawinan = $_POST["setatus_perkawinan"] ?? 'Belum Menikah'; // Ganti dengan nilai default
    $tanggal_kawin = $_POST["tanggal_kawin"] ?? '0000-00-00'; // Ganti dengan nilai default
    $nama_istri = $_POST["nama_istri"] ?? 'N/A'; // Ganti 'N/A' dengan nilai default yang diinginkan
    $shdk = $_POST["shdk"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $nama_ayah = $_POST["nama_ayah"] ?? 'N/A'; // Ganti 'N/A' dengan nilai default yang diinginkan
    $nama_ibu = $_POST["nama_ibu"] ?? 'N/A'; // Ganti 'N/A' dengan nilai default yang diinginkan
    $pendidikan = $_POST["pendidikan"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $kp_dusun = $_POST["kp_dusun"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $rt_rw = $_POST["rt_rw"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $desa = $_POST["desa"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $kecamatan = $_POST["kecamatan"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $kabupaten = $_POST["kabupaten"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default
    $provinsi = $_POST["provinsi"] ?? 'Tidak Diketahui'; // Ganti dengan nilai default

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

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Penduduk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Form Input Data Penduduk</h1>
        
        <!-- Menu Tambah Penduduk dan Tambah Anggota Keluarga -->
        <div class="mb-3 text-center">
            <a href="tambah.php" class="alert alert-primary">Tambah Penduduk</a>
            <a class="alert alert-dark">Tambah Anggota Keluarga</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="no_kk">Pilih NO KK:</label>
                        <input type="text" class="form-control" id="no_kk_search" onkeyup="searchNoKK()" placeholder="Cari NO KK...">
                        <div id="no_kk_results" class="list-group" style="display: none;"></div>
                    </div>

                    <div class="form-group">
                        <label for="no_kk">NO KK :</label>
                        <input type="text" class="form-control" id="no_kk" name="no_kk" required readonly>
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK:</label>
                        <input type="text" class="form-control" id="nik" name="nik" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_panjang">NAMA PANJANG :</label>
                        <input type="text" class="form-control" id="nama_panjang" name="nama_panjang" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_panggilan">NAMA PANGGILAN:</label>
                        <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">JENIS KELAMIN :</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">TEMPAT LAHIR:</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">TANGGAL LAHIR:</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>

                    <div class="form-group">
                        <label for="agama">AGAMA:</label>
                        <input type="text" class="form-control" id="agama" name="agama" required>
                    </div>

                    <div class="form-group">
                        <label for="pekerjaan">PEKERJAAN:</label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                            <option value="buruh">buruh</option>
                            <option value="pelajar">pelajar</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="setatus_perkawinan">STATUS PERKAWINAN:</label>
                        <select class="form-control" id="setatus_perkawinan" name="setatus_perkawinan" required>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_kawin">TANGGAL KAWIN:</label>
                        <input type="date" class="form-control" id="tanggal_kawin" name="tanggal_kawin">
                    </div>

                    <div class="form-group">
                        <label for="nama_istri">NAMA ISTRI:</label>
                        <input type="text" class="form-control" id="nama_istri" name="nama_istri">
                    </div>

                    <div class="form-group">
                        <label for="shdk">SHDK:</label>
                        <input type="text" class="form-control" id="shdk" name="shdk" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_ayah">NAMA AYAH:</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_ibu">NAMA IBU:</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                    </div>

                    <div class="form-group">
                        <label for="pendidikan">PENDIDIKAN:</label>
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" required>
                    </div>

                    <div class="form-group">
                        <label for="kp_dusun">KAMPUNG/DUSUN:</label>
                        <input type="text" class="form-control" id="kp_dusun" name="kp_dusun" required>
                    </div>

                    <div class="form-group">
                        <label for="rt_rw">RT/RW:</label>
                        <input type="text" class="form-control" id="rt_rw" name="rt_rw" required>
                    </div>

                    <div class="form-group">
                        <label for="desa">DESA:</label>
                        <input type="text" class="form-control" id="desa" name="desa" required>
                    </div>

                    <div class="form-group">
                        <label for="kecamatan">KECAMATAN:</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                    </div>

                    <div class="form-group">
                        <label for="kabupaten">KABUPATEN:</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
                    </div>

                    <div class="form-group">
                        <label for="provinsi">PROVINSI:</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
                    <a href="beranda.php" class="btn btn-secondary">KEMBALI</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function searchNoKK() {
        var input = document.getElementById("no_kk_search");
        var filter = input.value.toLowerCase();
        var resultsDiv = document.getElementById("no_kk_results");
        resultsDiv.innerHTML = ""; // Kosongkan hasil sebelumnya
        resultsDiv.style.display = "none"; // Sembunyikan hasil jika tidak ada

        <?php
        // Ambil data NO KK dari database
        $result = mysqli_query($conn, "SELECT no_kk FROM data_penduduk");
        $noKKArray = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $noKKArray[] = $row['no_kk'];
        }
        ?>

        var noKKArray = <?php echo json_encode($noKKArray); ?>;
        var matchedResults = noKKArray.filter(function(noKK) {
            return noKK.toLowerCase().includes(filter);
        });

        if (matchedResults.length > 0) {
            matchedResults.forEach(function(noKK) {
                var item = document.createElement("a");
                item.className = "list-group-item list-group-item-action";
                item.textContent = noKK;
                item.onclick = function() {
                    document.getElementById("no_kk").value = noKK; // Mengisi input NO KK
                    input.value = noKK; // Mengisi input pencarian
                    resultsDiv.style.display = "none"; // Sembunyikan hasil
                };
                resultsDiv.appendChild(item);
            });
            resultsDiv.style.display = "block"; // Tampilkan hasil
        }
    }
    </script>
</body>
</html>
