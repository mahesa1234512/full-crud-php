<?php
session_start();

if (!isset($_SESSION["login"])) {
  echo "<script>
    alert('Silakan login terlebih dahulu');
    document.location.href = 'login.php';
    </script>";
  exit;
}

// Debugging: Tampilkan nilai level session
echo "<script>console.log('Level: " . $_SESSION["level"] . "');</script>";

if ($_SESSION["level"] != 1 and $_SESSION["level"] != 2) {
    echo "<script>
    alert('PERHATIAN: Anda tidak memiliki hak akses');
    document.location.href = 'crud-modal.php';
    </script>";
  exit;
}

$title = "Daftar Barang";

include 'layout/header.php';
$data_barang = select("SELECT * FROM barang ORDER BY id_barang ASC");
?>
<div class="container mt-5">
  <h1>Data Barang</h1>
  <hr>
  <a href="tambah-barang.php" class="btn btn-primary mb-1"><i class="fa-solid fa-circle-plus"></i> Tambah</a>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Barcode</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($data_barang as $barang) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $barang['nama']; ?></td>
          <td><?= $barang['jumlah']; ?></td>
          <td>Rp.<?= number_format($barang['harga'], 0, ',', '.') ?></td>
          <td class="text-center">
            <img alt="barcode" src="barcode.php?Code128&size=15&text=<?=$barang['barcode'];?>& print=true" />
          </td>
          <td><?= date("d/m/Y | H:i:s", strtotime($barang['tanggal'])); ?></td>
          <td width="15%" class="text-center">
            <a href="ubah-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success">Ubah</a>
            <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Data Barang Akan Dihapus?');">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php include 'layout/footer.php'; ?>