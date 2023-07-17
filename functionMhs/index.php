<?php
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tombil cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}


// Ambil data dari tabel mahasiswa / query data mahasiswa
// mysqli_query($conn,)
// mysql_query($conn, "SELECT * FROM 	mahasiswa");  (menggunakan query)
// note = kalau pakek query true / false ndak ada notifikasi ! HARUS DIAKALI menggunkan if(!$result){echo mysqli_eror($conn);}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<!-- javascript -->
	<script src="../js/jquery-3.7.0.min.js"></script>
	<script src="../js/script.js"></script>
</head>

<body class="bg-body">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand">Institut Tekonologi Kyoto</a>

		</div>
	</nav>
	<!-- <div style="background-image: url(https://cdn.shopify.com/s/files/1/0533/2089/files/5-websites-to-download-free-subtle-textures-subtle.jpg?5724472906039650661)"> -->
	<!-- MAIN -->
	<div class="container col-xxl-8 px-4 py-5">
		<div class="row">
			<div class="col-md-5 mv-3">
				<a class="btn btn-dark" href="../index.php" role="button">Kembali</a>
			</div>
			<div class="col-md-20 mb-4 text-center">
				<h2 class="text-uppercase">Data mahasiswa</h2>
			</div>
			<div class="col-md-5 mv-3">
				<a class="btn btn-primary" href="functionMhs/tambah.php" role="button">Tambah data</a>
			</div>
			<div class="col-md-7 mb-3">

				<form class="d-flex" role="search" method="post">

					<input class="form-control me-2" type="text" placeholder="Cari data mahasiswa" aria-label="Search" name="keyword" id="keyword">

					<button class="btn btn-outline-success" type="submit" name="cari" id="golek">Cari</button>

					<div class="clearfix" id="loader">
						<div class="spinner-border float-end" role="status">
							<span class="visually-hidden">Loading...</span>
						</div>
					</div>

				</form>

			</div>

			<div id="container">
				<table class="table table-light table-hover">
					<tr>
						<th>No.</th>
						<th>Foto</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Prodi</th>
						<th>Fakultas</th>
						<th>Hobby</th>
						<th>No. Telpon</th>
						<th>Jenis kelamin</th>
						<th>Ubah | Hapus</th>
					</tr>

					<?php $i = 1; ?>

					<?php foreach ($mahasiswa as $mhs) : ?>
						<form action="tampil.php" method="post">
							<tr>
								<td><?= $i; ?></td>
								<td><img src="../img/<?= $mhs["gambar"] ?>" alt="foto_mhs" width="70"></td>
								<td><?= $mhs["NIM"] ?></td>
								<td><a href="tampil.php?id=<?= $mhs["id"] ?>"><?= $mhs["nama"] ?></a></td>
								<td><?= $mhs["prodi"] ?></td>
								<td><?= $mhs["fakultas"] ?></td>
								<td><?= $mhs["hobby"] ?></td>
								<td><?= $mhs["noTlp"] ?></td>
								<td><?= $mhs["jk"] ?></td>
								<td>
									<a href="ubah.php?id=<?= $mhs["id"] ?>">Ubah</a> |
									<a href="hapus.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yakin?');">Hapus</a>
								</td>
							</tr>
						</form>
						<?php $i++; ?>

					<?php endforeach; ?>

				</table>
			</div>
		</div>
	</div>
</body>

</html>