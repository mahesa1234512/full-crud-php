<?php 
$title = "Ubah Barang";
include 'layout/header.php';

//mengambil id barang dari url
$id_barang = (int)$_GET['id_barang'];

$barang = mysqli_query($db,"SELECT * FROM barang where id_barang = $id_barang");
while($data = mysqli_fetch_array($barang)){
    $id = $data['id_barang'];
    $nama = $data['nama'];
    $jumlah = $data['jumlah'];
    $harga = $data['harga'];
}
if (isset($_POST['ubah'])) {
    if (update_barang($_POST) > 0) {
        echo "<script>
        alert('Data Barang Berhasil Ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Barang Gagal Ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Ubah Barang</h1>
    <hr>
    <form action="" method="post">

        <input type="hidden" name="id_barang" value="<?= $id; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>" placeholder="Nama Barang" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $jumlah;?>" placeholder="Jumlah Barang" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $harga;?>" placeholder="Harga Barang" required>
        </div>
        <button type="submit" class="btn btn-primary" name="ubah" style="float: right;">Ubah</button>
    </form>
</div>
<?php include 'layout/footer.php'; ?>