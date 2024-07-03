<?php
session_start();
if(!isset($_SESSION["login"])){
    echo "<script>
    alert('login dulu');
    document.location.href = 'login.php';
    </script>";
    exit;
}
// menerima id mahasiswa yang dipilih pengguna
include 'config/app.php';
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0){
    echo "<script>
    alert('Data Mahasiswa Berhasil Dihapus');
    document.location.href = 'mahasiswa.php';
    </script>";
}else {
    echo "<script>
    alert('Data Mahasiswa Gagal Dihapus');
    document.location.href = 'mahasiswa.php';
    </script>";
}
?>