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
		 	<hr width="100%">
		</nav>

	<!-- Bagian Form-->
	<main>
			<a name="menujuform">
				<h3>FORM</h3>
			</a>
				<section id="sec-form">
					<form method="post" action="halaman2.php" method="get" id="form-daftar">
					<p>	
						<label for="input-username">Nama:</label>
							<input type="text" id="input-username" placeholder=""/>
					</p>
					<p>
						<label for="input-email">Email:</label>
							<input type="Email" id="input-email" placeholder=""/>
					</p>
					<p>
						<label for="input-tanggal_lahir">Tgl. lahir:</label>
							<input date="Tanggal-lahir" id="Tanggal-lahir" placeholder="YYYY/MM/DD"/>
					</p>
						
						<label for="input-Jenis_kelamis">Jenis Kelamin:</label> 
   						<input type="radio" name="Jenis-kelamin" id="Jenis-kelamin" value="Laki-laki"/>Laki-laki
   						<input type="radio" name="Jenis-kelamin" id="Jenis-kelamin" value="Perempuan"/>Perempuan
   						<input type="radio" name="Jenis-kelamin" id="Jenis-kelamin" value="Tidak-Dijelaskan" />Tidak dijelaskan
   					<p>	
   						<label for="input-hobi">Hobi:</label>
   						<input type="checkbox" name="hobi[]" value="Berkendara"/>Berkendara
   						<input type="checkbox" name="hobi[]" value="Bermain-Musik"/>Bermain Musik
   						<input type="checkbox" name="hobi[]" value="Belajar"/>Belajar
   						<br>
   						<br>
   						<td>
   							<input type="submit"  id="Simpan" value="Simpan">
   						</td>
   						<td>
   							<input type="Reset" id="Reset" value="Reset">
   						</td>
   						<hr width="100%">
   					</p>
   						
				</section>
		
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
					<tr>
						<th style="text-align: center;" scope="row">1</th>
						<td style="text-align: center;">Baruna</th>
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