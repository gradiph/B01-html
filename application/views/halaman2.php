<!DOCTYPE html>
<html>
<head>
	<title>Tugas Gradi</title>
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
		 	<hr width="100%">
		</nav>

	<!-- Bagian Form-->
	<main>
			<a name="menujuform">
				<h3>FORM</h3>
			</a>
				<section>
					<form method="post" action="halaman2.php" method="get" id="form-daftar">
					<p>	
						<label>Nama:</label>
							<input type="text" name="username" placeholder="username"/>
					</p>
					<p>
						<label>Email:</label>
							<input type="Email" name="email" placeholder="email"/>
					</p>
					<p>
						<label>Tanggal Lahir:</label>
							<input date="tanggal lahir" name="tanggal lahir" placeholder="tanggal lahir"/>
					</p>
						
						<label>Jenis Kelamin:</label> 
   						<input type="radio" name="Jenis Kelamin" value="Laki - laki"/>Laki -laki
   						<input type="radio" name="Jenis Kelamin" value="Perempuan"/>Perempuan
   						<input type="radio" name="Jenis Kelamin" value="Tidak Dijelaskan" />Tidak Dijelaskan
   					<p>	
   						<label>Hobi:</label>
   						<input type="checkbox" name="hobi1" value="Berkendara"/>Berkendara
   						<input type="checkbox" name="hobi2" value="Bermain Musik"/>Bermain Musik
   						<input type="checkbox" name="hobi3" value="Belajar"/>Belajar
   						<br>
   						<br>
   						<td>
   							<input type="submit" value="Simpan">
   						</td>
   						<td>
   							<input type="submit" value="Reset">
   						</td>
   						<hr width="100%">
   					</p>
   						
				</section>
		
		<!-- Isi Tabel -->	
		<section>
		<a name="menujutabel">	
			<h3>TABEL</h3>
		</a>
				<table border="1">
					<tr>
						<td style="text-align: center;">NO</td>
						<td style="text-align: center;">Nama</td>
						<td style="text-align: center;">Deskripsi 1</td>
						<td style="text-align: center;">Deskripsi 2</td>
						<td style="text-align: center;">Deskripsi 3</td>
					</tr>
					<tr>
						<td style="text-align: center;">1</td>
						<td style="text-align: center;">Baruna Marines</td>
						<td style="text-align: center;">ABC</td>
						<td style="text-align: center;">DEF</td>
						<td style="text-align: center;">GHI</td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td style="text-align: center;">Gradi</td>
						<td style="text-align: center;">JKL</td>
						<td colspan="2" style="text-align: center;">MNO</td>
						
					</tr>
					<tr>
						<td style="text-align: center;">3</td>
						<td style="text-align: center;">Tita</td>
						<td rowspan="2" style="text-align: center;">PQR</td>
						<td style="text-align: center;">STU</td>
						<td style="text-align: center;">VWX</td>
					</tr>
					<tr>
						<td style="text-align: center;">4</td>
						<td style="text-align: center;">Yohana</td>
						<td style="text-align: center;">YZA</td>
						<td style="text-align: center;">BCD</td>
					</tr>
				</table>
				<hr width="100%">
		</section>
	</main>
	
	<!-- Isi Footer -->
	<footer>
		Baruna, 5 Desember 2018 &copy; Baruna IT
	</footer>
</body>
</html>