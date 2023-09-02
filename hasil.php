<!--
	UTS Pemrograman Web
	Nama : Yovie Pradea Sandiana
	NPM : 217006081
	Kelas : C
-->
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Input Data Mahasiswa</title>
	<link href="bootstrap.css" rel="stylesheet">
</head>
<body>
	<body style="background:#2e2e2e;color:#fff;"></body>
	<div class="container">
		<form class="form" background="#ffffff" action="main.html">
		<h2 class="form-heading">Hasil Data Terinput</h2>
		<div class="login-wrap">
		<label for="npm" class="text">NPM: <?php echo $_POST["npm"]; ?></label></br>
		<label for="nama" class="text">Nama: <?php echo $_POST["nama"]; ?></label></br>
		<label for="alamat" class="text">Alamat: <?php echo $_POST["alamat"]; ?></label></br>
		<label for="jk" class="text">Jenis Kelamin: <?php echo $_POST["jk"]; ?></label></br>
		<label for="jurusan" class="text">Jurusan: <?php echo $_POST["jurusan"]; ?></label></br>
		<label for="angkatan" class="text">Angkatan: <?php echo $_POST["angkatan"]; ?></label></br></br>
		<button class="btn btn-block" style="background:#0a4caf;color:#fff;" type="submit">Keluar</button>
</body>
	<script>
		// konfirmasi sebelum submit
		document.querySelector("form").addEventListener("submit", function(event) {
			if (!confirm("Apakah anda yakin ingin keluar?")) {
				event.preventDefault();
			}
		});
	</script>
</body>
</html>


