<?php
session_start();

// Periksa apakah user sudah login
if (!isset($_SESSION["login"])) {
    echo "<script>
    alert('Silakan login terlebih dahulu');
    document.location.href = 'login.php';
    </script>";
    exit;
}

include 'config/app.php';

// Ambil id_akun dari parameter GET
$id_akun = (int)$_POST['id_akun'];

// Panggil fungsi delete_akun untuk menghapus akun
if (delete_akun($id_akun) > 0) {
    echo "<script>
    alert('Data Akun Berhasil Dihapus');
    document.location.href = 'crud-modal.php';
    </script>";
} else {
    echo "<script>
    alert('Data Akun Gagal Dihapus');
    document.location.href = 'crud-modal.php';
    </script>";
}
?>
