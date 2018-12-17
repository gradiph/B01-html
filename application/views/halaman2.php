<!DOCTYPE html>
<html>
	<head>
		<title>TUGAS GRADI</title>
	</head>
	<body>
		<!-- Bagian Header -->
		<header>
			<center>
			<p>
				<a name="logo">
					<img src="<?php echo base_url ("assets/img/html5.png"); ?>" width="200px" height="200px" alt="gambar html">
				</a>
			</p>
			<h1>HTML 5</h1>
			</center>
		</header>
		<!-- Daftar Isi -->
		<nav>
			<a name="daftarisi">
				<h3>Daftar Isi</h3>
			</a>
			<ul>
				<li>
					<a href="#logo">Menuju ke Logo</a>
				</li>
				<li>
					<a href="#daftarisi">Daftar Isi</a>
				</li>
				<li>
					<a href="#menujuform">Menuju Form</a>
				</li>
				<li>
					<a href="#menujutabel">Menuju Tabel</a>
				</li>
			</ul>
		</nav>
		<hr width="100%">
		<!-- Bagian Form-->
		<main>
			<a name="menujuform">
				<h3>FORM</h3>
			</a>
			<section id="sec-form">
				<form method="post" action="halaman2.php" id="form-daftar">
					<p>
						<label for="input_username">Nama:</label>
						<input type="text" id="input_username" name="input_username" />
					</p>
					<p>
						<label for="input_email">Email:</label>
						<input type="Email" id="input_email" name="input_email" />
					</p>
					<p>
						<label for="input_tanggal_lahir">Tgl. lahir:</label>
						<input type="date"  id="input_tanggal_lahir" name="input_tanggal_lahir" placeholder="YYYY/MM/DD"/>
					</p>
					<label for="Jenis_kelamin">Jenis Kelamin:</label>
					<input type="radio" name="Jenis_kelamin" id="Jenis_kelamin" value="Laki_laki"/>Laki-laki
					<input type="radio" name="Jenis_kelamin" id="Jenis_kelamin" value="Perempuan"/>Perempuan
					<input type="radio" name="Jenis_kelamin" id="Jenis_kelamin" value="Tidak_Dijelaskan" />Tidak dijelaskan
					<p>
						<label for="hobi[]">Hobi:</label>
						<input type="checkbox" name="hobi[]" id="hobi[]" value="Berkendara"/>Berkendara
						<input type="checkbox" name="hobi[]" id="hobi[]" value="Bermain-Musik"/>Bermain Musik
						<input type="checkbox" name="hobi[]" id="hobi[]" value="Belajar"/>Belajar
						<br>
						<br>
						<td><input type="submit"  id="Simpan" value="Simpan" name="Simpan"></td>
						<td><input type="Reset" id="Reset" value="Reset" name="Reset"></td>
					</p>
				</form>
				</section>
				<hr width="100%">
				
				<!-- Isi Tabel -->
				<section id="sec-form">
					<a name="menujutabel">
						<h3>TABEL</h3>
					</a>
					<table border="1">
						<thead>
							<tr>
								<th style="text-align: center;" scope="col">NO</th>
								<th style="text-align: center;" scope="col">NAMA</th>
								<th style="text-align: center;" scope="col">DESKRIPSI 1</th>
								<th style="text-align: center;" scope="col">DESKRIPSI 2</th>
								<th style="text-align: center;" scope="col">DESKRIPSI 3</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th style="text-align: center;" scope="row">1</th>
								<td style="text-align: center;">Baruna</td>
								<td style="text-align: center;">ABC</td>
								<td style="text-align: center;">DEF</td>
								<td style="text-align: center;">GHI</td>
							</tr>
							<tr>
								<th style="text-align: center;" scope="row">2</th>
								<td style="text-align: center;">Gradi</td>
								<td style="text-align: center;">JKL</td>
								<td colspan="2" style="text-align: center;">MNO</td>
							</tr>
							<tr>
								<th style="text-align: center;" scope="row">3</th>
								<td style="text-align: center;">Tita</td>
								<td rowspan="2" style="text-align: center;">PQR</td>
								<td style="text-align: center;">STU</td>
								<td style="text-align: center;">VWX</td>
							</tr>
							<tr>
								<th style="text-align: center;" scope="row">4</th>
								<td style="text-align: center;">Yohana</td>
								<td style="text-align: center;">YZA</td>
								<td style="text-align: center;">BCD</td>
							</tr>
						</tbody>
					</table>
				</section>
			</main>
			<hr width="100%">
			
			<!-- Isi Footer -->
			<footer>
				Baruna, 5 Desember 2018 &copy; Baruna IT
			</footer>
		</body>
	</html>