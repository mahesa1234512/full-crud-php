<?php
session_start();

if(!isset($_SESSION["login"])){
    echo "<script>
    alert('login dulu');
    document.location.href = 'login.php';
    </script>";
    exit;
}
$title = 'Detail Mahasiswa';
include 'layout/header.php';
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

$mahasiswa = mysqli_query($db,"SELECT * FROM mahasiswa where id_mahasiswa = $id_mahasiswa");
while($data = mysqli_fetch_array($mahasiswa)){
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
    <h1>Data <?= $nama; ?></h1>
    <hr>

    <table class="table table-bordered table-striped mt-3">
        <tr>
            <td>Nama</td>
            <td>: <?= $nama; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>: <?= $prodi; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $jk; ?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>: <?= $telepon; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?= $alamat;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $email; ?></td>
        </tr>
        <tr>
            <td width="50%">Foto</td>
            <td>
                <a href="assets/img/<?= $foto?>">
                    <img src="assets/img/<?= $foto?>" alt="foto" width="20%">
                </a>
            </td>
        </tr>
    </table>
    <a href="mahasiswa.php" class="btn btn-secondary btn-sm" style="float: right ; ">Kembali</a>
</div>
<?php include 'layout/footer.php'; ?>