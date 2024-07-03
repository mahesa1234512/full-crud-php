<?php
function select($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function create_barang($post)
{
    global $db;

    $nama = $post['nama'];
    $jumlah = $post['jumlah'];
    $harga = $post['harga'];
    $barcode = rand(100000, 999999);
    $query = "INSERT INTO barang VALUES(null, '$nama', '$jumlah', '$harga', '$barcode' ,CURRENT_TIMESTAMP())";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}

function update_barang($post)
{
    global $db;

    $id_barang = $post['id_barang'];
    $nama = $post['nama'];
    $jumlah = $post['jumlah'];
    $harga = $post['harga'];

    $query = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga ='$harga' WHERE id_barang = $id_barang";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}

function delete_barang($id_barang)
{
    global $db;

    $query = "DELETE FROM barang WHERE id_barang = $id_barang";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}

function create_mahasiswa($post)
{
    global $db;

    $nama = strip_tags($post['nama']);
    $prodi = strip_tags($post['prodi']);
    $jk = strip_tags($post['jk']);
    $telepon = strip_tags($post['telepon']);
    $alamat = $post['alamat'];
    $email = strip_tags($post['email']);
    $foto = upload_file();

    if (!$foto) {
        return false;
    }
    $query = "INSERT INTO mahasiswa VALUES(null, '$nama', '$prodi', '$jk', '$telepon', '$alamat', '$email', '$foto')";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}

function update_mahasiswa($post)
{
    global $db;

    $id_mahasiswa = strip_tags($post['id_mahasiswa']);
    $nama = strip_tags($post['nama']);
    $prodi = strip_tags($post['prodi']);
    $jk = strip_tags($post['jk']);
    $telepon = strip_tags($post['telepon']);
    $alamat = $post['alamat'];
    $email = strip_tags($post['email']);
    $fotoLama = strip_tags($post['fotoLama']);

    if ($_FILES['foto']['error'] == 4) {
        $foto = $fotoLama;
    } else {
        $foto = upload_file();
    }

    $query = "UPDATE mahasiswa SET nama = '$nama', prodi = '$prodi', jk = '$jk', telepon = 
    '$telepon', alamat = '$alamat', email = '$email', foto = '$foto' WHERE id_mahasiswa = $id_mahasiswa";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}

function upload_file()
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    $extensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile = explode('.', $namaFile);
    $extensifile = strtolower(end($extensifile));

    if (!in_array($extensifile, $extensifileValid)) {
        echo "<script>
        alert('Format File Tidak Valid');
        document.location.href = 'tambah-mahasiswa.php';
        </script>";
        die();
    }

    if ($ukuranFile > 2048000) {
        echo "<script>
        alert('Ukuran File Terlalu Besar');
        document.location.href = 'tambah-mahasiswa.php';
        </script>";
        die();
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensifile;

    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}

function delete_mahasiswa($id_mahasiswa)
{
    global $db;

    $foto = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];
    unlink("assets/img/". $foto['foto']);
    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}

function create_akun($post)
{
    global $db;

    $nama = strip_tags($post['nama']);
    $username = strip_tags($post['username']);
    $email = strip_tags($post['email']);
    $password = strip_tags($post['password']);
    $level = strip_tags($post['level']);

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO akun VALUES(null, '$nama', '$username', '$email', '$password', '$level')";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}

function delete_akun($id_akun)
{
    global $db;

    $query = "DELETE FROM akun WHERE id_akun = $id_akun";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function update_akun($post)
{
    global $db;

    $id_akun = strip_tags($post['id_akun']);
    $nama = strip_tags($post['nama']);
    $username = strip_tags($post['username']);
    $email = strip_tags($post['email']);
    $password = strip_tags($post['password']);
    $level = strip_tags($post['level']);

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id_akun = $id_akun";

    if (mysqli_query($db, $query)) {
        return mysqli_affected_rows($db);
    } else {
        echo "<script>console.log('Error: " . mysqli_error($db) . "');</script>";
        return 0;
    }
}
?>
