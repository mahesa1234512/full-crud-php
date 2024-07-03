<?php
session_start();
$title = "Ubah Mahasiswa";
include 'layout/header.php';

if (isset($_POST['ubah'])) {
    if (update_mahasiswa($_POST) > 0) {
        echo "<script>
        alert('Data Mahasiswa Berhasil Diubahkan');
        document.location.href = 'mahasiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Mahasiswa Gagal Diubahkan');
        document.location.href = 'mahasiswa.php';
        </script>";
    }
}
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

$mahasiswa = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa");
while ($data = mysqli_fetch_array($mahasiswa)) {
    $id = $data['id_mahasiswa'];
    $nama = $data['nama'];
    $prodi = $data['prodi'];
    $jk = $data['jk'];
    $telepon = $data['telepon'];
    $alamat = $data['alamat'];
    $email = $data['email'];
    $foto = $data['foto'];
}
?>

<div class="container mt-5">
    <h1>Ubah Mahasiswa</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_mahasiswa" value="<?= $id; ?>">
        <input type="hidden" name="fotoLama" value="<?= $foto; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa" required value="<?= $nama; ?>">
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" id="prodi" class="form-control" required>
                    <option value="">-- Pilih Prodi --</option>
                    <option value="Teknik Informatika" <?= $prodi == 'Teknik Informatika' ? 'selected' : null ?>>Teknik Informatika</option>
                    <option value="Teknik Mesin" <?= $prodi == 'Teknik Mesin' ? 'selected' : null ?>>Teknik Mesin</option>
                    <option value="Teknik Listrik" <?= $prodi == 'Teknik Listrik' ? 'selected' : null ?>>Teknik Listrik</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required>
                    <option value="laki-laki" <?= $jk == 'laki-laki' ? 'selected' : null ?>>Laki-laki</option>
                    <option value="perempuan" <?= $jk == 'perempuan' ? 'selected' : null ?>>Perempuan</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon" required value="<?= $telepon; ?>">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="3" required><?= $alamat; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?= $email; ?>">
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto">
            <p>
                <small>Gambar Sebelumnya</small>
            </p>
            <img src="assets/img/<?= $foto; ?>" alt="foto" width="100px" ;>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;"><i class="fas fa-plus"> ubah</i></button>
    </form>
</div>
<?php include 'layout/footer.php'; ?>