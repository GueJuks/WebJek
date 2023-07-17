<?php
require 'function.php';


// ambil data du URL
$id = $_GET['id'];

// query data mahasiswa berdasarkan id nya
$kry = query("SELECT * FROM karyawan WHERE id = $id")[0];



if (isset($_POST["submit"])) {
    // cek apakah data berhasil diubah atau ngga
    if (ubah($_POST) > 0) {
        // echo "Data Diubah";
        echo "
            <script>
                alert('Data Berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        // echo "Data Gagal Tambah";
        echo "
            <script>
                alert('Data Gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

// cek tombol submit sudah ditekan / belum
// if( isset($_POST["submit"]) ) {
//     // cek apakah data berhasil di tambahkan atau ngga
//     if ( mysqli_affected_rows($conn) > 0) {
//         echo "Berhasil We";
//     } else {
//         echo "Salah we..";
//         echo mysqli_error($conn);
//     }
//     ;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $kry['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $kry['gambar'];?>">
        <ul>
            <li>
                <label for="niq">niq : </label>
                <input type="text" name="niq" id="niq" required value="<?= $kry['niq']; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $kry['nama']; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" value="<?= $kry['alamat']; ?>">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" value="<?= $kry['email']; ?>">
            </li>
            <li>
                <label for="tlp">tlp : </label>
                <input type="text" name="tlp" id="tlp" value="<?= $kry['tlp']; ?>">
            </li>
            <li>
                <label for="posisi">posisi : </label>
                <input type="text" name="posisi" id="posisi" value="<?= $kry['posisi']; ?>">
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <br>
                <img width="100px" src="../img/<?= $kry['gambar']; ?>" alt="gambar">
                <br>
                <input type="file" name="gambar" id="gambar" value="<?= $kry['gambar']; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>

</html>