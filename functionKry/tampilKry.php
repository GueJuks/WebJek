<?php
require 'function.php';
// if(!isset($_GET["nama"]) ||
// 	!isset($_GET["NIM"]) ||
// 	!isset($_GET["prodi"]) ||
// 	!isset($_GET["fakultas"]) ||
// 	!isset($_GET["hobby"]) ||
// 	!isset($_GET["noTlp"]) ||
// 	!isset($_GET["jk"]) ||
// 	!isset($_GET["gambar"])){
// 	header("Location: index.php");
// 	exit;
// }
// $conn = mysqli_connect("localhost", "root", "", "db_jeki");
// ambil data du URL
$id = $_GET['id'];
$kry = query("SELECT* FROM karyawan WHERE id = $id")[0];
// $result = mysqli_query($conn ,"SELECT * FROM mahasiswa id = $id")[0];
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

// $dataMhs = tampil();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Detail Mahasiswa</title>
</head>

<body class="bg-body">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Institut Tekonologi Kyoto</a>

        </div>
    </nav>
    <!-- <div style="background-image: url(https://cdn.shopify.com/s/files/1/0533/2089/files/5-websites-to-download-free-subtle-textures-subtle.jpg?5724472906039650661)"> -->
    <!-- MAIN -->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <form action="">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-uppercase"><?= $kry["nama"]; ?></h1>
                    <div class="row mb-3">
                        <label for="niq" class="col-sm-2 col-form-label">niq</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="niq" name="niq" value="<?= $kry["niq"]; ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $kry["alamat"]; ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $kry["email"]; ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tlp" class="col-sm-2 col-form-label">tlp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $kry["tlp"]; ?>" disabled readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="posisi" class="col-sm-2 col-form-label">posisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $kry["posisi"]; ?>" disabled readonly>
                        </div>
                    </div>
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
            <div class="col-lg-6">
                <img src="../img/<?= $kry["gambar"] ?>" alt="foto_mhs" class="d-block mx-lg-auto img-fluid" width="50%" alt="foto_ayank" loading="lazy" />
            </div>
        </div>
    </div>


    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>